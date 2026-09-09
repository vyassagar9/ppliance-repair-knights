#!/usr/bin/env node
/**
 * Automated Pre-Upload & Build Verification Script
 * Appliance Repair Knights Ltd.
 *
 * Prevents regressions such as:
 * - Empty/malformed Tailwind CSS bundles
 * - Missing cache-busting tokens in head.php
 * - PHP syntax errors anywhere in the project
 */

const fs = require('fs');
const path = require('path');
const { execSync } = require('child_process');

const ROOT_DIR = path.resolve(__dirname, '..');
let hasError = false;

function error(msg) {
  console.error(`\x1b[31m[ERROR]\x1b[0m ${msg}`);
  hasError = true;
}

function success(msg) {
  console.log(`\x1b[32m[PASS]\x1b[0m ${msg}`);
}

function warn(msg) {
  console.log(`\x1b[33m[WARN]\x1b[0m ${msg}`);
}

console.log('\n==================================================');
console.log('Running Pre-Upload Sanity & Build Verification');
console.log('==================================================\n');

// 1. Check css/tailwind.min.css size and content
const tailwindPath = path.join(ROOT_DIR, 'css', 'tailwind.min.css');
if (!fs.existsSync(tailwindPath)) {
  error('css/tailwind.min.css does not exist! Run `npm run build:css` first.');
} else {
  const stat = fs.statSync(tailwindPath);
  const sizeKb = Math.round(stat.size / 1024);
  if (stat.size < 30000) {
    error(`css/tailwind.min.css is dangerously small (${stat.size} bytes / ~${sizeKb} KB)! It must be >= 30 KB to include full site utility classes.`);
  } else {
    const content = fs.readFileSync(tailwindPath, 'utf8');
    const requiredSelectors = ['.flex', '.grid', '.hidden', 'text-white', 'bg-brandDarkBlue'];
    const missing = requiredSelectors.filter(s => !content.includes(s));
    if (missing.length > 0) {
      error(`css/tailwind.min.css is missing core classes: ${missing.join(', ')}`);
    } else {
      success(`css/tailwind.min.css verified (~${sizeKb} KB, all core utilities intact)`);
    }
  }
}

// 2. Check css/style.min.css
const stylePath = path.join(ROOT_DIR, 'css', 'style.min.css');
if (!fs.existsSync(stylePath)) {
  error('css/style.min.css does not exist!');
} else {
  const stat = fs.statSync(stylePath);
  if (stat.size < 1000) {
    error(`css/style.min.css is too small (${stat.size} bytes).`);
  } else {
    success(`css/style.min.css verified (~${Math.round(stat.size / 1024)} KB)`);
  }
}

// 3. Verify head.php has cache-busting on both CSS files
const headPath = path.join(ROOT_DIR, 'head.php');
if (!fs.existsSync(headPath)) {
  error('head.php does not exist!');
} else {
  const headContent = fs.readFileSync(headPath, 'utf8');
  if (!headContent.includes('tailwind.min.css?v=')) {
    error('head.php is missing cache-busting (?v=...) on tailwind.min.css!');
  } else {
    success('head.php has active cache-busting on tailwind.min.css');
  }

  if (!headContent.includes('style.min.css?v=')) {
    error('head.php is missing cache-busting (?v=...) on style.min.css!');
  } else {
    success('head.php has active cache-busting on style.min.css');
  }
}

// 4. Verify all PHP files compile with 0 syntax errors
try {
  const phpBin = fs.existsSync('/Applications/MAMP/bin/php/php8.3.30/bin/php')
    ? '/Applications/MAMP/bin/php/php8.3.30/bin/php'
    : 'php';
  const out = execSync(
    `find . -name "*.php" -not -path "*/node_modules/*" -not -path "*/.git/*" -exec ${phpBin} -l {} \\;`,
    { cwd: ROOT_DIR, encoding: 'utf8' }
  );
  const syntaxErrors = out.split('\n').filter(line => line && !line.includes('No syntax errors detected'));
  if (syntaxErrors.length > 0) {
    error(`PHP syntax errors found:\n${syntaxErrors.join('\n')}`);
  } else {
    success('All PHP files compiled with 0 syntax errors');
  }
} catch (e) {
  error(`Failed running PHP lint: ${e.message}`);
}

console.log('\n--------------------------------------------------');
if (hasError) {
  console.error('\x1b[31m[BUILD FAILED]\x1b[0m Please resolve the errors above before uploading.\n');
  process.exit(1);
} else {
  console.log('\x1b[32m[ALL CHECKS PASSED]\x1b[0m Safe to upload to production!\n');
  process.exit(0);
}
