<?php
/**
 * Appliance Repair Knights - High-Conversion Same-Day PPC Landing Page Template
 * Supports all 6 Appliances & GTA Cities via clean URL rewriting
 * Adheres strictly to AGENTS.md:
 * - No specific pricing/cost numbers (upfront written quotes, diagnostic fee waived with repair)
 * - No specific warranty day/month/year numbers (comprehensive written parts and labour warranty)
 * - No hardcoded operational day counts (available daily for prompt dispatch)
 * - Isolated PPC page: noindex, follow
 */

// -----------------------------------------------------------------------
// Auto-detect service & city from REQUEST_URI or SCRIPT_FILENAME
// Covers cases where .htaccess rewrite doesn't fire (e.g. direct .html access,
// MAMP without AllowOverride, or static file served directly)
// -----------------------------------------------------------------------
$service_param = strtolower(trim($_GET['service'] ?? ''));
$city_param    = strtolower(trim($_GET['city'] ?? ''));

// Fallback: parse from URL path or script filename (e.g. washer-repair-toronto.html)
if (empty($service_param) || empty($city_param)) {
    $uri_source = $_SERVER['REQUEST_URI'] ?? $_SERVER['SCRIPT_NAME'] ?? '';
    $uri_source = basename(parse_url($uri_source, PHP_URL_PATH));
    $uri_source = preg_replace('/\.(html?|php)$/i', '', $uri_source);
    // Pattern: (service)-repair-(city) or (service)-(city)
    if (preg_match('/^(refrigerator|fridge|washer|washing-machine|dryer|dishwasher|oven|stove|cooktop|microwave|appliance)(?:-repair)?-([a-z0-9\-]+)$/i', $uri_source, $m)) {
        if (empty($service_param)) $service_param = strtolower($m[1]);
        if (empty($city_param))    $city_param    = strtolower($m[2]);
    }
}

// Final fallback defaults
if (empty($service_param)) $service_param = 'appliance';
if (empty($city_param))    $city_param    = 'toronto';

// Normalize aliases
$service_aliases = [
    'fridge' => 'refrigerator',
    'washing-machine' => 'washer',
    'cooktop' => 'stove',
    'range' => 'stove',
];
if (isset($service_aliases[$service_param])) {
    $service_param = $service_aliases[$service_param];
}

// Forward to dedicated 100% Coffee Machine & Espresso PPC landing page
if (in_array($service_param, ['coffee', 'coffee-machine', 'espresso'])) {
    include __DIR__ . '/coffee-machine-repair.php';
    exit();
}

$city_names = [
    'toronto' => 'Toronto',
    'mississauga' => 'Mississauga',
    'brampton' => 'Brampton',
    'vaughan' => 'Vaughan',
    'markham' => 'Markham',
    'richmond-hill' => 'Richmond Hill',
    'oakville' => 'Oakville',
    'burlington' => 'Burlington',
    'etobicoke' => 'Etobicoke',
    'north-york' => 'North York',
    'scarborough' => 'Scarborough',
];
$city_name = $city_names[$city_param] ?? ucwords(str_replace('-', ' ', $city_param));
$city_slug = $city_param;

// Neighborhoods per city
$city_neighborhoods = [
    'toronto' => ['Downtown Toronto', 'North York', 'Scarborough', 'Etobicoke', 'Midtown & Yorkville', 'East York', 'High Park & Bloor West', 'Forest Hill', 'Leaside & Rosedale', 'The Beaches & Leslieville'],
    'mississauga' => ['Port Credit', 'Streetsville', 'Erin Mills', 'Meadowvale', 'Cooksville', 'City Centre / Square One', 'Lorne Park', 'Clarkson', 'Lakeview', 'Churchill Meadows'],
    'brampton' => ['Bramalea', 'Mount Pleasant', 'Castlemore', 'Downtown Brampton', 'Heart Lake', 'Springdale', "Fletcher's Meadow", 'Goreway', 'Bram West', 'Peel Village'],
    'vaughan' => ['Woodbridge', 'Maple', 'Thornhill', 'Kleinburg', 'Concord', 'Vellore Village', 'Carrville', 'Patterson', 'Pine Grove', 'Sonoma Heights'],
    'markham' => ['Unionville', 'Markham Village', 'Cornell', 'Milliken', 'Thornhill East', 'Wismer', 'Box Grove', 'Greensborough', 'Angus Glen', 'Cachet'],
    'richmond-hill' => ['Oak Ridges', 'Bayview Glen', 'Mill Pond', 'Langstaff', 'Rouge Woods', 'Jefferson', 'Crosby', 'Elgin Mills', 'Devonsleigh', 'Richvale'],
    'oakville' => ['Old Oakville', 'Bronte', 'Glen Abbey', 'River Oaks', 'West Oak Trails', 'Joshua Creek', 'Clearview', 'Falgarwood', 'College Park', 'Morrison'],
    'burlington' => ['Aldershot', 'Downtown Burlington', 'Brant Hills', 'Millcroft', 'The Orchard', 'Palmer', 'Roseland', 'Shoreacres', 'Mountainside', 'Tyandaga']
];
$hoods = $city_neighborhoods[$city_slug] ?? [
    "Downtown {$city_name}", "North {$city_name}", "East {$city_name}", "West {$city_name}", "Central {$city_name}",
    "{$city_name} Suburbs", "{$city_name} Heights", "{$city_name} Valley", "{$city_name} Park", "{$city_name} Core"
];

// Service Data Matrix
$services_data = [
    'appliance' => [
        'name' => 'Appliance',
        'title' => 'Appliance',
        'badge' => 'SAME-DAY APPLIANCE REPAIR',
        'h1_prefix' => "Fast Appliance Repair in {$city_name}",
        'h1_action' => "Get Same-Day Repair",
        'h1' => "Fast Appliance Repair in {$city_name}",
        'cta' => "Book Your Appliance Repair Today",
        'appliance_val' => 'General Appliance Repair',
        'hero_img' => '../img/appliance-repair-technician-toronto.webp',
        'desc' => "Don't let broken household appliances disrupt your routine — get fast, same-day appliance repair from licensed local technicians across {$city_name} & the GTA. We service all major kitchen and laundry appliances including refrigerators, washing machines, dryers, dishwashers, and ovens, with clear upfront written quotes before work begins.",
        'pills' => [
            'Refrigerator & Freezer Repair',
            'Washer & Dryer Service',
            'Dishwasher Leak & Drain Repair',
            'Oven, Stove & Range Service',
            'Microwave & Small Appliances'
        ],
        'faults' => [
            [
                'title' => 'Refrigerator Not Cooling or Freezing',
                'desc' => 'Compressor running constantly or evaporator fan stalled, risking food spoilage. Fast diagnostic of start relay, thermistor, or sealed system.',
                'badge' => 'COOLING FAULT'
            ],
            [
                'title' => 'Washer or Dishwasher Leaking Water',
                'desc' => 'Torn door boot bellow seal, cracked inlet valve, or loose internal hose connection threatening water damage.',
                'badge' => 'LEAK RISK'
            ],
            [
                'title' => 'Clothes Dryer Not Heating / Blowing Cold',
                'desc' => 'Burnt-out nichrome heating element coil, blown high-limit thermal fuse, or failed gas solenoid coils leaving clothes damp.',
                'badge' => 'HEATING FAULT'
            ],
            [
                'title' => 'Oven Not Baking / Gas Burners Clicking',
                'desc' => 'Burned-out bake element with visible blisters, weak glow igniter, or defective relay control board.',
                'badge' => 'IGNITION & ELEMENT'
            ],
            [
                'title' => 'Loud Noise, Grinding or Heavy Vibrations',
                'desc' => 'Worn motor bearings, broken suspension springs, or defective pump impellers causing excessive noise during operation.',
                'badge' => 'MECHANICAL WEAR'
            ],
            [
                'title' => 'Electronic Error Codes & Mid-Cycle Stoppage',
                'desc' => 'Main PCB board communication glitch, sensor out of range, or door switch safety lockout stopping operation.',
                'badge' => 'CONTROL ERROR'
            ]
        ],
        'gallery' => [
            ['title' => 'KITCHEN REFRIGERATOR', 'img' => '../img/appliance-repair-technician-toronto.webp', 'sub' => "{$hoods[1]} • Cooling restored"],
            ['title' => 'LAUNDRY WASHER', 'img' => '../img/washing-machine-repair-technician-toronto.webp', 'sub' => "{$hoods[0]} • Pump replaced"],
            ['title' => 'CLOTHES DRYER', 'img' => '../img/clothes-dryer-repair-technician-toronto.webp', 'sub' => "{$hoods[4]} • Heating fixed"],
            ['title' => 'BUILT-IN DISHWASHER', 'img' => '../img/dishwasher-repair-technician-toronto.webp', 'sub' => "{$hoods[3]} • Drain cleared"],
            ['title' => 'OVEN & RANGE', 'img' => '../img/oven-dryer-repair-service.webp', 'sub' => "{$hoods[2]} • Element replaced"]
        ],
        'faqs' => [
            [
                'q' => "How fast can a technician arrive for appliance repair in {$city_name}?",
                'a' => "We offer priority same-day dispatch across {$city_name}. When you book before 2:00 PM, our certified technician can typically arrive at your home within 2 to 4 hours with a fully stocked service vehicle."
            ],
            [
                'q' => "How does your diagnostic service fee work?",
                'a' => "Our diagnostic service call fee is completely waived when you choose to proceed with our authorized repair. You receive a firm, upfront written quote before any work begins."
            ],
            [
                'q' => "Do your technicians carry genuine replacement parts?",
                'a' => "Yes. Our mobile service vans are stocked with genuine OEM factory replacement parts for Samsung, LG, Whirlpool, Bosch, KitchenAid, GE, Maytag, and all major brands."
            ],
            [
                'q' => "What warranty do you provide on appliance repairs?",
                'a' => "Every repair completed by Appliance Repair Knights is backed by our comprehensive written warranty on parts and labour."
            ],
            [
                'q' => "Which appliances do you repair?",
                'a' => "We repair all residential kitchen and laundry appliances including refrigerators, freezers, washing machines, dryers, dishwashers, ovens, stoves, cooktops, and microwaves."
            ]
        ]
    ],
    'refrigerator' => [
        'name' => 'Refrigerator',
        'title' => 'Refrigerator',
        'badge' => 'SAME-DAY REFRIGERATOR REPAIR',
        'h1_prefix' => "Refrigerator Not Cooling, Leaking or Ice Maker Broken?",
        'h1_action' => "Get Same-Day Repair",
        'h1' => "Refrigerator Not Cooling, Leaking or Ice Maker Broken?",
        'cta' => "Book Your Refrigerator Repair Today",
        'appliance_val' => 'Refrigerator / Freezer',
        'hero_img' => '../img/appliance-repair-technician-toronto.webp',
        'desc' => "Don't let your food spoil — get fast, same-day refrigerator repair from licensed local technicians. We service Samsung, LG, Whirlpool, Bosch, and all major brands, with clear upfront written quotes before work begins.",
        'pills' => [
            'Fridge Not Cooling / Warm',
            'Water Leaking on Floor',
            'Ice Maker Jammed / Broken',
            'Defrost / Heavy Frost Buildup',
            'Noisy Humming Compressor',
            'Door Gasket / Seal Leaks'
        ],
        'faults' => [
            [
                'title' => 'Fridge Not Cooling / Warm Compartment',
                'desc' => 'Compressor running constantly or evaporator fan stalled, risking food spoilage. Fast diagnostic of start relay, thermistor, or sealed system.',
                'badge' => 'CRITICAL SPOILAGE RISK'
            ],
            [
                'title' => 'Water Leaking on Floor',
                'desc' => 'Frozen or blocked defrost drain line, cracked water inlet valve, or loose water filter housing creating pooling water under cabinets.',
                'badge' => 'WATER DAMAGE RISK'
            ],
            [
                'title' => 'Ice Maker Not Working or Jammed',
                'desc' => 'Ice dispenser jammed, defective ice mold thermostat, low water line pressure, or faulty modular drive motor assembly.',
                'badge' => 'DISPENSER FAULT'
            ],
            [
                'title' => 'Excessive Freezer Frost & Ice Buildup',
                'desc' => 'Failed defrost heater, blown bimetal thermostat, or damaged magnetic door gasket allowing humid room air inside the freezer.',
                'badge' => 'DEFROST SYSTEM FAULT'
            ],
            [
                'title' => 'Loud Humming, Clicking or Compressor Noise',
                'desc' => 'Dirty condenser coils causing compressor overheating, failing condenser fan motor bearings, or clicking PTC start relay.',
                'badge' => 'MOTOR & RELAY FAULT'
            ],
            [
                'title' => 'Constant Running / Rapid Cycling',
                'desc' => 'Temperature sensor drift, dirty coils, or failing electronic control board preventing the cooling cycle from completing efficiently.',
                'badge' => 'HIGH ENERGY USAGE'
            ]
        ],
        'gallery' => [
            ['title' => 'FRENCH DOOR FRIDGE', 'img' => '../img/appliance-repair-technician-toronto.webp', 'sub' => "{$hoods[1]} • Cooling restored"],
            ['title' => 'SIDE-BY-SIDE FRIDGE', 'img' => '../img/appliance-repair-technician-toronto.webp', 'sub' => "{$hoods[0]} • Ice maker fixed"],
            ['title' => 'BUILT-IN LUXURY FRIDGE', 'img' => '../img/appliance-repair-expert-technician.webp', 'sub' => "{$hoods[4]} • Inverter board serviced"],
            ['title' => 'BOTTOM-FREEZER FRIDGE', 'img' => '../img/appliance-repair-technician-toronto.webp', 'sub' => "{$hoods[3]} • Defrost drain cleared"],
            ['title' => 'COMPACT BEVERAGE FRIDGE', 'img' => '../img/appliance-repair-expert-technician.webp', 'sub' => "{$hoods[2]} • Fan motor replaced"]
        ],
        'faqs' => [
            [
                'q' => "How fast can a technician arrive for refrigerator repair in {$city_name}?",
                'a' => "We offer priority same-day dispatch across {$city_name}. When you book online or call before 2:00 PM, our certified technician can typically arrive at your home within 2 to 4 hours with a fully stocked service vehicle."
            ],
            [
                'q' => "How does your diagnostic fee work?",
                'a' => "We believe in complete transparency. Our diagnostic service call fee is completely waived when you proceed with the authorized repair. You receive a firm, upfront written quote before any work begins, with zero hidden travel charges or surprise fees."
            ],
            [
                'q' => "Do your technicians carry genuine refrigerator parts in their vans?",
                'a' => "Yes. Our mobile service vans are stocked with genuine factory replacement parts, including evaporator fan motors, start relays, thermistors, defrost heaters, bimetal thermostats, and water valves for all major brands including Samsung, LG, Whirlpool, KitchenAid, Bosch, and GE."
            ],
            [
                'q' => "Is there a warranty on your refrigerator repair work?",
                'a' => "Every refrigerator repair completed by Appliance Repair Knights is backed by our comprehensive written warranty on parts and labour. You receive full written documentation for complete peace of mind."
            ],
            [
                'q' => "Can you repair luxury and smart built-in refrigerators?",
                'a' => "Yes. Our senior technicians are certified and factory-trained to service luxury built-in brands such as Sub-Zero, Thermador, Viking, Miele, and Fisher & Paykel, as well as smart connected Wi-Fi refrigerators."
            ]
        ]
    ],
    'washer' => [
        'name' => 'Washing Machine',
        'title' => 'Washing Machine',
        'badge' => 'SAME-DAY WASHER REPAIR',
        'h1_prefix' => "Washer Leaking, Not Draining or Won't Spin?",
        'h1_action' => "Get Same-Day Repair",
        'h1' => "Washer Leaking, Not Draining or Won't Spin?",
        'cta' => "Book Your Washer Repair Today",
        'appliance_val' => 'Washing Machine',
        'hero_img' => '../img/washing-machine-repair-in-progress.webp',
        'desc' => "Don't let laundry pile up or water leaks damage your home — get fast, professional washing machine repair from experienced local technicians. We service Samsung, LG, Whirlpool, Maytag, Bosch, and all major brands, with clear upfront written quotes before work begins.",
        'pills' => [
            'Washer Not Draining / Standing Water',
            "Drum Won't Spin or Agitate",
            'Water Leaking Underneath',
            'Violent Banging & Shaking',
            'Door Lock / Lid Jammed'
        ],
        'faults' => [
            [
                'title' => 'Drum Not Spinning or Agitating',
                'desc' => 'Worn drive belt, broken direct drive motor coupling, or failed motor control board leaving your clothes soaking wet in the tub.',
                'badge' => 'CYCLE FAILURE'
            ],
            [
                'title' => 'Water Not Draining / Standing Water',
                'desc' => 'Clogged drain pump filter, coin or sock obstruction in pump impeller, or defective drain solenoid preventing spin cycle.',
                'badge' => 'DRAINAGE FAILURE'
            ],
            [
                'title' => 'Water Leaking on Laundry Floor',
                'desc' => 'Torn front door boot bellow seal, cracked water inlet valve, or loose internal tub hose connection threatening water damage.',
                'badge' => 'WATER LEAK RISK'
            ],
            [
                'title' => 'Violent Shaking, Thumping & Unbalance',
                'desc' => 'Worn hydraulic shock absorbers, broken suspension springs, or unbalanced counterbalance weights causing excessive movement.',
                'badge' => 'SUSPENSION FAULT'
            ],
            [
                'title' => 'Door Lock Jammed / Error Codes',
                'desc' => 'Defective door latch interlock switch, broken strike latch, or main PCB communication glitch preventing door opening.',
                'badge' => 'ELECTRONIC LATCH FAULT'
            ],
            [
                'title' => "Won't Fill or Constantly Overfills",
                'desc' => 'Clogged water inlet solenoid screens, mineral scale buildup, or failing water level pressure sensor.',
                'badge' => 'VALVE & SENSOR FAULT'
            ]
        ],
        'gallery' => [
            ['title' => 'FRONT-LOAD WASHER', 'img' => '../img/washing-machine-repair-technician-toronto.webp', 'sub' => "{$hoods[0]} • Drum bearings & seal"],
            ['title' => 'TOP-LOAD WASHER', 'img' => '../img/washing-machine-repair-technician.webp', 'sub' => "{$hoods[1]} • Drain pump replaced"],
            ['title' => 'STACKED LAUNDRY UNIT', 'img' => '../img/clothes-dryer-repair-technician-toronto.webp', 'sub' => "{$hoods[4]} • Suspension rods calibrated"],
            ['title' => 'SMART HE WASHER', 'img' => '../img/washing-machine-repair-technician.webp', 'sub' => "{$hoods[3]} • Control board restored"],
            ['title' => 'HIGH-EFFICIENCY WASHER', 'img' => '../img/washing-machine-repair-technician-toronto.webp', 'sub' => "{$hoods[2]} • Inlet valve fixed"]
        ],
        'faqs' => [
            [
                'q' => "How fast can a technician arrive for washing machine repair in {$city_name}?",
                'a' => "We prioritize same-day laundry repairs across {$city_name}. When you book before 2:00 PM, a certified technician is dispatched same-day and typically arrives at your home within 2 to 4 hours with a fully stocked vehicle."
            ],
            [
                'q' => "Is the service call diagnostic fee included?",
                'a' => "Yes! When you choose to proceed with our recommended repair, your diagnostic service fee is completely waived. We provide a clear, upfront written quote before beginning any work."
            ],
            [
                'q' => "Do your technicians carry common washer parts?",
                'a' => "Yes. Our service vans are mobile warehouses containing drain pumps, door bellow seals, lid locks, drive belts, water inlet valves, and suspension dampers for Samsung, LG, Whirlpool, Maytag, Bosch, and GE."
            ],
            [
                'q' => "Do you repair front-load and top-load washers?",
                'a' => "Yes. Our certified technicians service both front-load and top-load residential washers, including stackable units, high-efficiency (HE) impellers, and traditional center agitators."
            ],
            [
                'q' => "What warranty do you provide on washer repairs?",
                'a' => "Every washer repair is backed by our comprehensive written warranty covering all newly installed parts and technician labour."
            ]
        ]
    ],
    'dryer' => [
        'name' => 'Dryer',
        'title' => 'Clothes Dryer',
        'badge' => 'SAME-DAY DRYER REPAIR',
        'h1_prefix' => "Dryer Not Heating or Taking Too Long to Dry?",
        'h1_action' => "Get Fast Same-Day Repair",
        'h1' => "Dryer Not Heating or Taking Too Long to Dry?",
        'cta' => "Schedule Dryer Repair",
        'appliance_val' => 'Dryer',
        'hero_img' => '../img/clothes-dryer-repair-service.webp',
        'desc' => "Don't let damp clothes pile up or heat failures disrupt your routine — get fast, same-day clothes dryer repair from licensed local technicians. We service Whirlpool, Samsung, LG, Maytag, Bosch, and all major brands, with clear upfront written quotes before work begins.",
        'pills' => [
            'Dryer Not Heating Up / Cold Air',
            "Drum Won't Spin or Turn",
            'High-Pitched Squealing Noise',
            'Takes Multiple Cycles to Dry',
            'Overheating & Burning Smell'
        ],
        'faults' => [
            [
                'title' => 'Dryer Not Heating / Cold Drum',
                'desc' => 'Burnt-out nichrome heating element coil, blown high-limit thermal fuse, or failed gas solenoid coils leaving clothes damp.',
                'badge' => 'NO HEAT FAULT'
            ],
            [
                'title' => "Drum Won't Spin or Turn",
                'desc' => 'Snapped multi-rib drive belt, broken idler pulley tensioner, or seized drum roller bearing preventing rotation.',
                'badge' => 'MOTOR / BELT FAULT'
            ],
            [
                'title' => 'Loud Squealing or Thumping Noise',
                'desc' => 'Worn drum support rollers, damaged rear bearing sleeve, or worn front glide pads creating metal-on-metal friction.',
                'badge' => 'BEARING / ROLLER WEAR'
            ],
            [
                'title' => 'Takes 2-3 Cycles to Dry Clothes',
                'desc' => 'Restricted internal lint trap airflow, failing cycling thermostat, or restricted internal blower wheel reducing drying speed.',
                'badge' => 'AIRFLOW RESTRICTION'
            ],
            [
                'title' => 'Dryer Overheating / Burning Smell',
                'desc' => 'Lint accumulation on heater box, stuck high-limit thermostat, or restricted exhaust ventilation presenting a fire hazard.',
                'badge' => 'OVERHEATING WARNING'
            ],
            [
                'title' => "Shuts Off Prematurely / Won't Start",
                'desc' => 'Tripped thermal cutoff fuse, defective door push switch, or faulty motor centrifugal switch cutting off mid-cycle.',
                'badge' => 'THERMAL SAFETY CUTOFF'
            ]
        ],
        'gallery' => [
            ['title' => 'ELECTRIC DRYER', 'img' => '../img/clothes-dryer-repair-technician-toronto.webp', 'sub' => "{$hoods[0]} • Heating element replaced"],
            ['title' => 'GAS CLOTHES DRYER', 'img' => '../img/clothes-dryer-repair-service.webp', 'sub' => "{$hoods[1]} • Gas valve coils restored"],
            ['title' => 'FRONT-CONTROL DRYER', 'img' => '../img/clothes-dryer-repair-technician-toronto.webp', 'sub' => "{$hoods[4]} • Rollers & belt installed"],
            ['title' => 'SMART STEAM DRYER', 'img' => '../img/clothes-dryer-repair-service.webp', 'sub' => "{$hoods[3]} • Thermal cutoff fixed"],
            ['title' => 'COMPACT DRYER', 'img' => '../img/clothes-dryer-repair-technician-toronto.webp', 'sub' => "{$hoods[2]} • Blower motor serviced"]
        ],
        'faqs' => [
            [
                'q' => "How fast can a technician fix my dryer in {$city_name}?",
                'a' => "We offer same-day dryer repair across {$city_name}. When you book before 2:00 PM, a certified technician arrives within 2 to 4 hours with common parts to restore heat and tumbling."
            ],
            [
                'q' => "How much is the diagnostic service call?",
                'a' => "Our diagnostic fee is completely waived when you authorize the repair. You get a transparent, upfront written quote before work begins."
            ],
            [
                'q' => "Do you carry heating elements and belts in the van?",
                'a' => "Yes! Our service vehicles stock genuine factory heating elements, thermal fuses, drive belts, idler pulleys, and support rollers for Whirlpool, Samsung, LG, Maytag, GE, and Bosch dryers."
            ],
            [
                'q' => "Is it safe to run a dryer that smells like burning or squeaks loudly?",
                'a' => "No. We advise turning off the dryer and unplugging it. A squeaking roller can seize and snap the belt, while an overheating element or lint buildup can present a potential hazard. Our technician can inspect and repair it safely today."
            ],
            [
                'q' => "What kind of warranty comes with dryer repairs?",
                'a' => "All dryer repairs are backed by our comprehensive written parts and labour warranty."
            ]
        ]
    ],
    'dishwasher' => [
        'name' => 'Dishwasher',
        'title' => 'Dishwasher',
        'badge' => 'SAME-DAY DISHWASHER REPAIR',
        'h1_prefix' => "Dishwasher Not Draining, Cleaning or Leaking?",
        'h1_action' => "Same-Day Fix",
        'h1' => "Dishwasher Not Draining, Cleaning or Leaking?",
        'cta' => "Book Dishwasher Repair",
        'appliance_val' => 'Dishwasher',
        'hero_img' => '../img/open-dishwasher-repair.webp',
        'desc' => "Don't let dirty dishes pile up or leaks threaten your kitchen — get fast, same-day dishwasher repair from certified local technicians. We service all major brands including Bosch, Samsung, LG, KitchenAid, and Maytag, with clear upfront written quotes before work begins.",
        'pills' => [
            'Dishwasher Not Draining / Standing Water',
            'Dishes Coming Out Dirty / Gritty',
            'Water Leaking from Underneath',
            'Not Filling with Hot Water',
            "Door Latch Won't Catch"
        ],
        'faults' => [
            [
                'title' => 'Standing Water in Dishwasher Tub',
                'desc' => 'Clogged drain filter mesh, defective drain pump impeller, or pinched waste line preventing dirty water discharge.',
                'badge' => 'DRAIN PUMP FAULT'
            ],
            [
                'title' => 'Dishes Coming Out Dirty or Gritty',
                'desc' => 'Clogged spray arm nozzles, failing circulation wash pump motor, or defective heating element failing to dissolve detergent.',
                'badge' => 'CIRCULATION FAULT'
            ],
            [
                'title' => 'Water Leaking from Door or Under Tub',
                'desc' => 'Hardened perimeter door gasket, leaking diverter valve shaft seal, or cracked water inlet connection threatening cabinetry.',
                'badge' => 'CABINET LEAK HAZARD'
            ],
            [
                'title' => 'Dishwasher Not Filling with Water',
                'desc' => 'Defective water inlet solenoid valve, stuck overfill float switch, or low household water supply pressure.',
                'badge' => 'INLET VALVE FAULT'
            ],
            [
                'title' => 'Loud Grinding or Buzzing Noise',
                'desc' => 'Foreign object (bone, glass, toothpicks) in chopper blade assembly or failing wash motor bearings creating harsh sound.',
                'badge' => 'IMPELLER / MOTOR NOISE'
            ],
            [
                'title' => "Door Latch Won't Lock / Cycle Won't Start",
                'desc' => 'Broken door latch microswitch, distorted door hinge springs, or control panel keypad communication error.',
                'badge' => 'SWITCH & LATCH FAULT'
            ]
        ],
        'gallery' => [
            ['title' => 'BUILT-IN DISHWASHER', 'img' => '../img/dishwasher-repair-technician-toronto.webp', 'sub' => "{$hoods[0]} • Drain pump replaced"],
            ['title' => 'PANEL-READY DISHWASHER', 'img' => '../img/open-dishwasher-repair.webp', 'sub' => "{$hoods[4]} • Wash motor replaced"],
            ['title' => 'FRONT-CONTROL DISHWASHER', 'img' => '../img/dishwasher-repair-technician-toronto.webp', 'sub' => "{$hoods[1]} • Door gasket restored"],
            ['title' => 'SMART QUIET DISHWASHER', 'img' => '../img/open-dishwasher-repair.webp', 'sub' => "{$hoods[3]} • Inlet valve replaced"],
            ['title' => 'UNDER-COUNTER DISHWASHER', 'img' => '../img/dishwasher-repair-technician-toronto.webp', 'sub' => "{$hoods[2]} • Float switch serviced"]
        ],
        'faqs' => [
            [
                'q' => "How quickly can you fix a leaking or non-draining dishwasher in {$city_name}?",
                'a' => "We prioritize dishwasher water leaks and standing water issues. Book before 2:00 PM and a certified technician will typically arrive within 2 to 4 hours anywhere in {$city_name}."
            ],
            [
                'q' => "Is the service call diagnostic fee waived?",
                'a' => "Yes! When you proceed with the repair, your diagnostic service call fee is completely waived. You receive an upfront written quote before we start."
            ],
            [
                'q' => "Do you fix Bosch, Miele, and KitchenAid dishwashers?",
                'a' => "Yes. Our technicians are specially equipped with genuine factory components and diagnostic tools for all premium European and North American brands, including Bosch, Miele, KitchenAid, Whirlpool, Samsung, and GE."
            ],
            [
                'q' => "Why is water standing in the bottom of my dishwasher?",
                'a' => "This is commonly caused by a clogged filter screen, food debris trapped in the drain pump impeller, a kinked drain hose, or a failing drain pump motor. Our technician will isolate and resolve the blockage today."
            ],
            [
                'q' => "Do you guarantee parts and labour on dishwasher repairs?",
                'a' => "Yes, every dishwasher repair comes with our comprehensive written warranty covering both replacement parts and labour."
            ]
        ]
    ],
    'oven' => [
        'name' => 'Oven',
        'title' => 'Oven & Range',
        'badge' => 'SAME-DAY OVEN REPAIR',
        'h1_prefix' => "Oven Not Heating or Stove Burner Not Working?",
        'h1_action' => "Same-Day Stove & Oven Repair",
        'h1' => "Oven Not Heating or Stove Burner Not Working?",
        'cta' => "Request Stove & Oven Service",
        'appliance_val' => 'Oven / Range / Stove',
        'hero_img' => '../img/oven-dryer-repair-service.webp',
        'desc' => "Don't let uneven baking or broken elements stop your home cooking — get professional oven and range repair from certified local technicians. We service Samsung, LG, Whirlpool, GE, Bosch, and all major brands, with clear upfront written quotes before work begins.",
        'pills' => [
            'Oven Not Heating Up',
            'Uneven Baking / Burning Food',
            'Bake / Broil Element Burned Out',
            "Gas Igniter Won't Light",
            'Oven Door Lock / Hinge Jammed'
        ],
        'faults' => [
            [
                'title' => 'Oven Not Heating Up / Cold Inside',
                'desc' => 'Burned-out bottom bake element with visible blisters, or failed electronic relay control board preventing element activation.',
                'badge' => 'HEATING ELEMENT BLOWN'
            ],
            [
                'title' => 'Uneven Baking / Burning Food',
                'desc' => 'Drifting RTD temperature sensor probe, weak convection fan motor, or miscalibrated thermostat burning your dishes.',
                'badge' => 'TEMPERATURE DRIFT'
            ],
            [
                'title' => "Gas Oven Won't Ignite",
                'desc' => 'Weak glow-bar igniter unable to draw sufficient amperage to open the bi-metal gas safety valve safely.',
                'badge' => 'GAS IGNITION FAULT'
            ],
            [
                'title' => "Oven Door Locked / Won't Open",
                'desc' => 'Faulty motorized door lock assembly following self-clean cycle, or damaged thermal high-limit switch.',
                'badge' => 'DOOR LOCK JAMMED'
            ],
            [
                'title' => 'Error Code on Display (F1, F2, F3, F9)',
                'desc' => 'Main clock/timer control board malfunction, faulty keypad ribbon cable, or shorted temperature sensor wiring.',
                'badge' => 'CONTROL BOARD ERROR'
            ],
            [
                'title' => 'Oven Door Glass Cracked or Loose',
                'desc' => 'Damaged outer or inner tempered glass pane, bent door hinges, or degraded thermal fiberglass insulation.',
                'badge' => 'GLASS & HINGE WEAR'
            ]
        ],
        'gallery' => [
            ['title' => 'ELECTRIC WALL OVEN', 'img' => '../img/oven-dryer-repair-service.webp', 'sub' => "{$hoods[0]} • Bake element replaced"],
            ['title' => 'GAS FREESTANDING RANGE', 'img' => '../img/oven-stove-repair-service.webp', 'sub' => "{$hoods[1]} • Glow igniter restored"],
            ['title' => 'DOUBLE WALL OVEN', 'img' => '../img/oven-dryer-repair-service.webp', 'sub' => "{$hoods[4]} • Relay board repaired"],
            ['title' => 'CONVECTION OVEN', 'img' => '../img/oven-stove-repair-service.webp', 'sub' => "{$hoods[3]} • Fan motor replaced"],
            ['title' => 'SLIDE-IN RANGE OVEN', 'img' => '../img/oven-dryer-repair-service.webp', 'sub' => "{$hoods[2]} • Door latch motorized"]
        ],
        'faqs' => [
            [
                'q' => "How fast can you repair an oven in {$city_name}?",
                'a' => "We understand kitchen disruptions. Book before 2:00 PM for prompt same-day dispatch across {$city_name}. Our technician typically arrives within 2 to 4 hours."
            ],
            [
                'q' => "How does the diagnostic fee work for oven repair?",
                'a' => "Our diagnostic service call fee is completely waived when you choose to proceed with the recommended repair. You receive a firm upfront written quote before work begins."
            ],
            [
                'q' => "Do you carry oven bake elements in the service van?",
                'a' => "Yes. Our technicians carry standard and heavy-duty bake elements, broil elements, electronic igniters, and temperature sensors for Whirlpool, Samsung, GE, Frigidaire, LG, and Bosch."
            ],
            [
                'q' => "Is it safe to use an oven with a glowing red spot or spark on the bake element?",
                'a' => "No. A blistered or sparking bake element indicates the outer sheath is compromised and can burn completely through, potentially tripping your breaker or damaging control electronics. Turn the oven off and call us for immediate replacement."
            ],
            [
                'q' => "What warranty is provided on oven repairs?",
                'a' => "All replacement oven parts and labour are covered by our comprehensive written warranty."
            ]
        ]
    ],
    'stove' => [
        'name' => 'Stove & Cooktop',
        'title' => 'Stove & Cooktop',
        'badge' => 'SAME-DAY STOVE REPAIR',
        'h1_prefix' => "Oven Not Heating or Stove Burner Not Working?",
        'h1_action' => "Same-Day Stove & Oven Repair",
        'h1' => "Oven Not Heating or Stove Burner Not Working?",
        'cta' => "Request Stove & Oven Service",
        'appliance_val' => 'Oven / Range / Stove',
        'hero_img' => '../img/induction-cooktop-repair-service.webp',
        'desc' => "Don't let burner malfunctions or continuous clicking disrupt mealtime — get fast, same-day cooktop and stove repair from certified local technicians. We service electric, gas, and induction cooktops from Samsung, LG, Bosch, GE, and all major brands, with clear upfront written quotes before work begins.",
        'pills' => [
            'Electric Burner Not Heating',
            "Gas Burner Won't Spark",
            'Continuous Igniter Clicking',
            'Touch Controls Unresponsive',
            'Hot Surface Indicator Stuck On'
        ],
        'faults' => [
            [
                'title' => 'Electric Radiant Element Not Heating',
                'desc' => 'Burned-out ribbon heating element beneath ceramic glass, or defective infinite control rotary switch.',
                'badge' => 'ELEMENT BURNOUT'
            ],
            [
                'title' => "Gas Burner Won't Spark or Light",
                'desc' => 'Clogged burner head orifice, cracked ceramic electrode insulator, or failed electronic spark module.',
                'badge' => 'SPARK MODULE FAULT'
            ],
            [
                'title' => 'Continuous Clicking Igniter',
                'desc' => 'Moisture trapped in ignition switches, shorted spark switch harness, or defective reignition pulse module.',
                'badge' => 'SWITCH HARNESS FAULT'
            ],
            [
                'title' => "Induction Error / Won't Detect Pan",
                'desc' => 'Failed induction inverter power board, defective pan size detection coil sensor, or internal fan stoppage.',
                'badge' => 'INDUCTION INVERTER'
            ],
            [
                'title' => 'Hot Surface Indicator Light Stuck On',
                'desc' => 'Internal radiant limiter thermostat contacts welded closed, falsely signaling residual heat constantly.',
                'badge' => 'LIMITER THERMOSTAT'
            ],
            [
                'title' => 'Digital Glass Touch Controls Unresponsive',
                'desc' => 'Defective capacitive touch sensor PCB, low control voltage, or child lock safety lockout.',
                'badge' => 'TOUCH PANEL FAULT'
            ]
        ],
        'gallery' => [
            ['title' => 'CERAMIC RADIANT COOKTOP', 'img' => '../img/induction-cooktop-repair-service.webp', 'sub' => "{$hoods[0]} • Dual element fixed"],
            ['title' => 'GAS 5-BURNER COOKTOP', 'img' => '../img/oven-stove-repair-service.webp', 'sub' => "{$hoods[1]} • Spark module replaced"],
            ['title' => 'INDUCTION COOKTOP', 'img' => '../img/induction-cooktop-repair-service.webp', 'sub' => "{$hoods[4]} • Inverter board restored"],
            ['title' => 'ELECTRIC SLIDE-IN TOP', 'img' => '../img/induction-cooktop-repair-service.webp', 'sub' => "{$hoods[3]} • Surface limiter fixed"],
            ['title' => 'DOWNDRAFT GAS COOKTOP', 'img' => '../img/oven-stove-repair-service.webp', 'sub' => "{$hoods[2]} • Rotary switch harness"]
        ],
        'faqs' => [
            [
                'q' => "How quickly can a technician repair my stove or cooktop in {$city_name}?",
                'a' => "We provide same-day stove and cooktop repair across {$city_name}. When you book before 2:00 PM, a certified technician can usually arrive within 2 to 4 hours with common replacement switches and elements."
            ],
            [
                'q' => "How does your diagnostic fee work?",
                'a' => "Your diagnostic service call fee is completely waived when you choose to proceed with our authorized repair. We provide an upfront, transparent written quote before any work begins."
            ],
            [
                'q' => "Do you repair glass ceramic and induction cooktops?",
                'a' => "Yes! Our technicians are trained to service radiant smooth-top ceramic glass, magnetic induction cooktops, and traditional electric coil ranges from all top manufacturers."
            ],
            [
                'q' => "Why does my gas stove keep clicking even when turned off?",
                'a' => "Continuous clicking is usually caused by moisture entering the rotary ignition switches (often after cleaning or a spill), a shorted switch harness, or a failing spark reignition module. Our technician can safely diagnose and repair it today."
            ],
            [
                'q' => "What warranty do you offer on cooktop repairs?",
                'a' => "All our cooktop repairs are backed by our comprehensive written parts and labour warranty."
            ]
        ]
    ],
    'microwave' => [
        'name' => 'Microwave',
        'title' => 'Microwave',
        'badge' => 'SAME-DAY MICROWAVE REPAIR',
        'h1_prefix' => "Microwave Stopped Heating?",
        'h1_action' => "Fast Local Repair Techs",
        'h1' => "Microwave Stopped Heating? Fast Local Repair Techs",
        'appliance_val' => 'Microwave',
        'hero_img' => '../img/microwave-repair.webp',
        'desc' => "Don't struggle with cold food or sparking units — get safe, fast, same-day microwave repair from certified local technicians. We service over-the-range, built-in, and countertop microwaves from Samsung, LG, Panasonic, Whirlpool, and all major brands, with clear upfront written quotes before work begins.",
        'pills' => [
            'Microwave Not Heating Food',
            'Turntable Plate Not Spinning',
            'Sparking / Arcing Inside',
            'Touchpad & Buttons Unresponsive',
            'Door Switch / Latch Stuck'
        ],
        'faults' => [
            [
                'title' => 'Microwave Not Heating / Cold Food',
                'desc' => 'Failed high-voltage magnetron, blown high-voltage diode, or defective capacitor preventing microwave radiation emission.',
                'badge' => 'MAGNETRON FAULT'
            ],
            [
                'title' => 'Sparking or Arcing Inside Cavity',
                'desc' => 'Burned wave guide cover, damaged cavity paint or rack support causing electrical arcing risks.',
                'badge' => 'WAVEGUIDE ARCING'
            ],
            [
                'title' => 'Glass Turntable Plate Not Turning',
                'desc' => 'Stripped turntable drive coupler, broken roller support ring, or failed synchronous drive motor.',
                'badge' => 'TURNTABLE MOTOR'
            ],
            [
                'title' => 'Unresponsive Touchpad or Buttons',
                'desc' => 'Defective membrane switch keypad, main control board logic failure, or ribbon cable disconnect.',
                'badge' => 'TOUCHPAD FAULT'
            ],
            [
                'title' => 'Trips Breaker When Door Closes / Opens',
                'desc' => 'Short-circuited primary or secondary door interlock microswitch, misaligned door latch hooks.',
                'badge' => 'DOOR SWITCH SHORT'
            ],
            [
                'title' => 'Loud Humming or Buzzing Noise',
                'desc' => 'Failing high-voltage transformer or shorted cooling fan motor creating heavy electrical hum.',
                'badge' => 'TRANSFORMER NOISE'
            ]
        ],
        'gallery' => [
            ['title' => 'OVER-THE-RANGE MICROWAVE', 'img' => '../img/microwave-repair.webp', 'sub' => "{$hoods[0]} • Magnetron replaced"],
            ['title' => 'BUILT-IN DRAWER MICROWAVE', 'img' => '../img/microwave-repair.webp', 'sub' => "{$hoods[1]} • Touchpad restored"],
            ['title' => 'COUNTERTOP MICROWAVE', 'img' => '../img/microwave-repair.webp', 'sub' => "{$hoods[4]} • Door switch repaired"],
            ['title' => 'COMBINATION MICROWAVE OVEN', 'img' => '../img/microwave-repair.webp', 'sub' => "{$hoods[3]} • High-voltage diode fixed"],
            ['title' => 'COMMERCIAL MICROWAVE', 'img' => '../img/microwave-repair.webp', 'sub' => "{$hoods[2]} • Turntable motor replaced"]
        ],
        'faqs' => [
            [
                'q' => "How fast can you repair a microwave in {$city_name}?",
                'a' => "We offer same-day microwave repair across {$city_name}. When you book before 2:00 PM, a certified technician arrives within 2 to 4 hours with common replacement parts."
            ],
            [
                'q' => "How does the diagnostic fee work for microwave repair?",
                'a' => "Our diagnostic service call fee is completely waived when you proceed with the authorized repair. You get a transparent, upfront written quote before work begins."
            ],
            [
                'q' => "Do you repair built-in and over-the-range (OTR) microwaves?",
                'a' => "Yes, our technicians specialize in built-in drawer microwaves and over-the-range units from Panasonic, LG, Samsung, Whirlpool, KitchenAid, GE, and Bosch."
            ],
            [
                'q' => "Is it safe to run a sparking microwave?",
                'a' => "No. Unplug the microwave immediately. Sparking can be caused by food splatter on the waveguide cover or exposed metal, which can damage the magnetron or cause fire hazards. Our technician will safely test and repair it today."
            ],
            [
                'q' => "What warranty do you offer on microwave repairs?",
                'a' => "All microwave repairs are backed by our comprehensive written parts and labour warranty."
            ]
        ]
    ]
];

// Fallback to appliance if unknown service
$srv = $services_data[$service_param] ?? $services_data['appliance'] ?? $services_data['refrigerator'];
$service_slug = $service_param;
$page_identifier = "{$service_slug}-{$city_slug}";

// Page Metadata
$page_title = "Same-Day {$srv['name']} Repair in {$city_name} | Local Certified Technicians";
$meta_desc  = "Need fast {$srv['name']} repair in {$city_name}? Licensed technicians fix all issues today. Diagnostic fee waived with repair. Genuine factory parts & written warranty.";
$canonical_url = "https://www.appliancerepairknights.com/same-day-repair/{$page_identifier}";

// Service Types Map matching reference layout
$service_appliance_types = [
    'appliance' => [
        'Kitchen Refrigerators & Freezers', 'Front & Top Load Washers', 'Clothes Dryers',
        'Built-In Dishwashers', 'Ovens, Ranges & Stoves', 'Built-In & Countertop Microwaves'
    ],
    'refrigerator' => [
        'French Door Refrigerators', 'Side-by-Side Refrigerators', 'Bottom-Freezer Refrigerators',
        'Top-Freezer Traditional Units', 'Built-In & Counter-Depth Fridges', 'Wine Coolers & Beverage Centers'
    ],
    'washer' => [
        'Front-Loading Washing Machines', 'Top-Loading Agitator Washers', 'High-Efficiency (HE) Washers',
        'Stackable Washer-Dryer Units', 'Compact & European Style Washers', 'Smart Wi-Fi Connected Washers'
    ],
    'dryer' => [
        'Electric Vented Dryers', 'Natural Gas & Propane Dryers', 'Heat Pump & Condenser Dryers',
        'Front-Loading Match Dryers', 'Stacked Laundry Centers', 'Commercial Heavy-Duty Dryers'
    ],
    'dishwasher' => [
        'Built-In Under-Counter Dishwashers', 'Integrated Panel-Ready Units', 'Double Drawer Dishwashers',
        'Portable Freestanding Dishwashers', 'Stainless Steel Tall-Tub Units', 'Commercial Style Dishwashers'
    ],
    'oven' => [
        'Electric Single & Double Wall Ovens', 'Gas Convection Built-In Ovens', 'Slide-In & Freestanding Ranges',
        'Commercial Style Cooking Ranges', 'Dual-Fuel Electric/Gas Ovens', 'Warming Drawers & Steam Ovens'
    ],
    'stove' => [
        'Smooth Ceramic Glass Cooktops', 'Gas Sealed-Burner Rangetops', 'Magnetic Induction Cooktops',
        'Downdraft Electric Cooktops', 'Electric Coil Element Stoves', 'Commercial Style Cooktops'
    ],
    'microwave' => [
        'Over-The-Range (OTR) Microwaves', 'Built-In Pull-Out Drawer Microwaves', 'Countertop High-Wattage Units',
        'Convection Microwave Combos', 'Commercial Breakroom Microwaves', 'Built-In Trim-Kit Microwaves'
    ]
];
$current_types = $service_appliance_types[$service_param] ?? $service_appliance_types['refrigerator'];

$all_brand_names = [
    'Samsung', 'LG', 'Whirlpool', 'Bosch', 'GE Appliances', 'KitchenAid',
    'Maytag', 'Frigidaire', 'Kenmore', 'Electrolux', 'Miele', 'Sub-Zero',
    'Thermador', 'Viking', 'Amana', 'Hotpoint', 'JennAir', 'Speed Queen',
    'Fisher & Paykel', 'Haier', 'Danby', 'Insignia', 'Blomberg', 'Hisense',
    'Asko', 'Bertazzoni', 'Dacor', 'Fulgor Milano', 'Liebherr', 'Sharp'
];

$all_service_cities = [
    'Toronto', 'Mississauga', 'Brampton', 'Vaughan', 'Markham', 'Richmond Hill',
    'Oakville', 'Burlington', 'Hamilton', 'Milton', 'Caledon', 'Newmarket',
    'Aurora', 'King City', 'Stouffville', 'Pickering', 'Ajax', 'Whitby',
    'Oshawa', 'Etobicoke', 'North York', 'Scarborough', 'Downtown Toronto',
    'East York', 'York', 'Woodbridge', 'Thornhill', 'Maple', 'Unionville',
    'Georgetown', 'Halton Hills', 'Guelph', 'Kitchener', 'Waterloo', 'Cambridge'
];
?>
<!DOCTYPE html>
<html lang="en-CA" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Preconnect & DNS-Prefetch for High-Priority External Assets -->
  <link rel="preconnect" href="https://www.googletagmanager.com" crossorigin>
  <link rel="dns-prefetch" href="https://www.googletagmanager.com">

  <!-- Google Tag Manager (Mobile-First Smart Deferred Loading) -->
  <script>
    window.dataLayer = window.dataLayer || [];
    function loadGTM() {
      if (window._gtmLoaded) return;
      window._gtmLoaded = true;
      (function (w, d, s, l, i) {
        w[l] = w[l] || []; w[l].push({
          'gtm.start':
            new Date().getTime(), event: 'gtm.js'
        }); var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-M7B6FLPR');
    }
    ['scroll', 'mousemove', 'touchstart', 'pointerdown', 'click'].forEach(function (e) {
      window.addEventListener(e, loadGTM, { once: true, passive: true });
    });
    if ('requestIdleCallback' in window) {
      requestIdleCallback(function () { setTimeout(loadGTM, 1500); });
    } else {
      window.addEventListener('load', function () { setTimeout(loadGTM, 1500); });
    }
  </script>
  <!-- End Google Tag Manager -->

  <!-- Primary Meta Tags for Google Ads PPC -->
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="description" content="<?php echo htmlspecialchars($meta_desc); ?>">
  <meta name="robots" content="noindex, follow">
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../img/apple-touch-icon.png">

  <!-- Tailwind & Global Stylesheet -->
  <link rel="stylesheet" href="../css/tailwind.min.css">
  <link rel="stylesheet" href="../css/style.min.css">

  <style>
    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 100 900;
      font-display: swap;
      src: url('../fonts/inter-latin.woff2') format('woff2');
    }
    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 100 900;
      font-display: swap;
      src: url('../fonts/montserrat-latin.woff2') format('woff2');
    }
    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    }
    h1, h2, h3, h4, .font-heading {
      font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    }
    .hover-lift {
      transition: transform .25s ease, box-shadow .25s ease;
    }
    .hover-lift:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 20px -5px rgba(10, 46, 82, .12);
    }
    /* PPC Premium Footer & Trust Architecture */
    .ppc-footer-root {
      background: linear-gradient(180deg, #071221 0%, #030811 100%);
      color: #94a3b8;
      position: relative;
    }
    .ppc-footer-root::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      height: 1px;
      background: linear-gradient(90deg, transparent, rgba(255, 107, 0, 0.6), rgba(15, 76, 129, 0.8), transparent);
    }
    .ppc-trust-strip {
      border-bottom: 1px solid rgba(255, 255, 255, 0.08);
      background: rgba(15, 32, 56, 0.4);
    }
    .ppc-trust-strip-grid {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1rem;
    }
    @media (min-width: 768px) {
      .ppc-trust-strip-grid {
        grid-template-columns: repeat(4, 1fr);
        gap: 1.25rem;
      }
    }
    .ppc-footer-grid {
      display: grid;
      grid-template-columns: 1fr;
      gap: 2.25rem;
    }
    @media (min-width: 640px) {
      .ppc-footer-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 2.5rem;
      }
    }
    @media (min-width: 1024px) {
      .ppc-footer-grid {
        grid-template-columns: 1.35fr 1fr 1fr 1.15fr;
        gap: 2.75rem;
      }
    }
    .ppc-footer-link {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      color: #94a3b8;
      font-size: 0.8125rem;
      transition: all 0.2s ease;
      text-decoration: none;
    }
    .ppc-footer-link:hover {
      color: #ff6b00;
      transform: translateX(3px);
    }
    .ppc-badge-chip {
      display: inline-flex;
      align-items: center;
      gap: 0.375rem;
      background: rgba(255, 255, 255, 0.05);
      border: 1px solid rgba(255, 255, 255, 0.1);
      padding: 0.35rem 0.65rem;
      border-radius: 0.5rem;
      font-size: 0.6875rem;
      font-weight: 700;
      letter-spacing: 0.02em;
      color: #e2e8f0;
      transition: all 0.2s ease;
    }
    .ppc-badge-chip:hover {
      background: rgba(255, 255, 255, 0.12);
      border-color: rgba(255, 107, 0, 0.45);
      color: #ffffff;
    }
    .ppc-footer-heading {
      font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, sans-serif;
      font-size: 0.8125rem;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: 0.06em;
      color: #ffffff;
      padding-top: 0.35rem;
      padding-bottom: 0.75rem;
      margin-top: 0;
      margin-bottom: 1.25rem;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      display: flex;
      align-items: center;
      gap: 0.625rem;
    }
    .ppc-footer-heading-bar {
      display: inline-block;
      width: 24px;
      height: 2.5px;
      background-color: #ff6b00;
      border-radius: 9999px;
      flex-shrink: 0;
    }
    .ppc-footer-subheading {
      font-size: 0.6875rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      color: #94a3b8;
      padding-top: 0.75rem;
      margin-bottom: 0.5rem;
    }
    .ppc-footer-list {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      flex-direction: column;
      gap: 0.625rem;
    }
    .ppc-footer-col {
      display: flex;
      flex-direction: column;
      gap: 0.875rem;
    }

    /* PPC High-Converting Middle CTA Strip */
    .ppc-cta-strip {
      background: linear-gradient(135deg, #071221 0%, #0d1e35 50%, #071221 100%);
      border-top: 1px solid rgba(255, 107, 0, 0.4);
      border-bottom: 1px solid rgba(255, 255, 255, 0.08);
      box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.5), inset 0 1px 0 rgba(255, 255, 255, 0.08);
      position: relative;
      overflow: hidden;
      padding: 1.5rem 1rem;
    }
    .ppc-cta-strip::before {
      content: '';
      position: absolute;
      top: -60px;
      right: -60px;
      width: 240px;
      height: 240px;
      background: radial-gradient(circle, rgba(255, 107, 0, 0.15) 0%, transparent 70%);
      pointer-events: none;
    }
    .ppc-cta-strip-inner {
      max-width: 1150px;
      margin: 0 auto;
      padding: 0 0.5rem;
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1.25rem;
      position: relative;
      z-index: 2;
    }
    @media (min-width: 900px) {
      .ppc-cta-strip-inner {
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        text-align: left;
        gap: 2rem;
      }
    }
    .ppc-cta-left {
      display: flex;
      align-items: center;
      gap: 1.125rem;
      text-align: left;
    }
    @media (max-width: 639px) {
      .ppc-cta-left {
        flex-direction: column;
        text-align: center;
        align-items: center;
      }
    }
    .ppc-cta-icon-box {
      width: 52px;
      height: 52px;
      border-radius: 14px;
      background: linear-gradient(135deg, #ff6b00 0%, #e85d00 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      color: #ffffff;
      flex-shrink: 0;
      box-shadow: 0 6px 20px rgba(255, 107, 0, 0.4);
      border: 1px solid rgba(255, 255, 255, 0.2);
    }
    .ppc-cta-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: rgba(16, 185, 129, 0.12);
      border: 1px solid rgba(16, 185, 129, 0.35);
      color: #34d399;
      font-size: 0.6875rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      padding: 0.2rem 0.65rem;
      border-radius: 9999px;
      margin-bottom: 0.35rem;
    }
    .ppc-cta-pulse-dot {
      width: 7px;
      height: 7px;
      border-radius: 9999px;
      background-color: #34d399;
      animation: ppcPulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
    @keyframes ppcPulse {
      0%, 100% { opacity: 1; transform: scale(1); }
      50% { opacity: 0.4; transform: scale(0.85); }
    }
    .ppc-cta-phone-link {
      font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, sans-serif;
      font-weight: 900;
      font-size: 1.5rem;
      line-height: 1.15;
      color: #ffffff;
      letter-spacing: -0.02em;
      text-decoration: none;
      white-space: nowrap !important;
      display: block;
      transition: color 0.2s ease;
    }
    @media (min-width: 640px) {
      .ppc-cta-phone-link {
        font-size: 1.75rem;
      }
    }
    .ppc-cta-phone-link:hover {
      color: #ff8533;
    }
    .ppc-cta-subtext {
      color: #94a3b8;
      font-size: 0.75rem;
      margin-top: 0.25rem;
      font-weight: 500;
      white-space: normal;
    }
    .ppc-cta-actions {
      display: flex;
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      gap: 0.75rem;
      width: 100%;
    }
    @media (min-width: 900px) {
      .ppc-cta-actions {
        width: auto;
        justify-content: flex-end;
      }
    }
    .ppc-cta-btn-call {
      background: linear-gradient(135deg, #ff6b00 0%, #ff8533 100%);
      color: #ffffff !important;
      font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, sans-serif;
      font-weight: 800;
      font-size: 0.8125rem;
      text-transform: uppercase;
      letter-spacing: 0.04em;
      padding: 0.85rem 1.6rem;
      border-radius: 12px;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      text-decoration: none;
      white-space: nowrap !important;
      box-shadow: 0 8px 24px rgba(255, 107, 0, 0.45);
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
      flex: 1 1 auto;
      justify-content: center;
    }
    @media (min-width: 640px) {
      .ppc-cta-btn-call {
        flex: 0 0 auto;
      }
    }
    .ppc-cta-btn-call:hover {
      transform: translateY(-2px);
      box-shadow: 0 12px 28px rgba(255, 107, 0, 0.6);
      color: #ffffff;
    }
    .ppc-cta-btn-call:active {
      transform: scale(0.98);
    }
    .ppc-cta-btn-book {
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.22);
      color: #ffffff !important;
      font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, sans-serif;
      font-weight: 700;
      font-size: 0.8125rem;
      text-transform: uppercase;
      letter-spacing: 0.04em;
      padding: 0.85rem 1.5rem;
      border-radius: 12px;
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      text-decoration: none;
      white-space: nowrap !important;
      backdrop-filter: blur(4px);
      -webkit-backdrop-filter: blur(4px);
      transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
      flex: 1 1 auto;
      justify-content: center;
    }
    @media (min-width: 640px) {
      .ppc-cta-btn-book {
        flex: 0 0 auto;
      }
    }
    .ppc-cta-btn-book:hover {
      background: rgba(255, 255, 255, 0.16);
      border-color: rgba(255, 255, 255, 0.45);
      color: #ffffff;
      transform: translateY(-2px);
    }
    .ppc-cta-btn-book:active {
      transform: scale(0.98);
    }
  </style>

  <!-- Google PPC JSON-LD LocalBusiness & FAQ Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "LocalBusiness",
        "@id": "https://www.appliancerepairknights.com/#organization",
        "name": "Appliance Repair Knights Ltd.",
        "url": "https://www.appliancerepairknights.com/",
        "logo": "https://www.appliancerepairknights.com/img/logo.webp",
        "image": "https://www.appliancerepairknights.com/img/appliance-repair-banner.webp",
        "telephone": "905-717-8905",
        "email": "info@appliancerepairknights.com",
        "priceRange": "$$",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "100 King St W",
          "addressLocality": "Toronto",
          "addressRegion": "ON",
          "postalCode": "M5X 1A9",
          "addressCountry": "CA"
        },
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "5.0",
          "reviewCount": "15"
        },
        "areaServed": ["Toronto", "Mississauga", "Brampton", "Vaughan", "Markham", "Oakville", "Burlington", "Hamilton"]
      }
    ]
  }
  </script>
</head>

<body class="bg-white text-slate-800 font-sans antialiased selection:bg-brandOrange selection:text-white">

  <!-- TOP DISPATCH ANNOUNCEMENT BAR -->
  <aside class="bg-brandDarkBlue text-white text-xs py-2 px-4 border-b border-brandBlue/30">
    <div class="max-w-7xl mx-auto flex justify-between items-center">
      <div class="flex items-center gap-2">
        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
        <span class="font-medium text-slate-200">Same-Day <?php echo htmlspecialchars($srv['name']); ?> Repair Near You • Prompt Dispatch</span>
      </div>
      <div class="flex items-center gap-4 text-xs font-extrabold text-brandOrange">
        <span class="hidden sm:inline text-slate-300">Available Daily: 8:00 AM – 8:00 PM</span>
        <a href="tel:9057178905" onclick="trackGtmCall('topbar')" class="gtm-ppc-call gtm-ppc-call-topbar hover:underline text-white font-bold">Call: 905-717-8905</a>
      </div>
    </div>
  </aside>

  <!-- CLEAN MINIMAL HEADER (MATCHING CLIENT REFERENCE) -->
  <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-brandBorder shadow-sm">
    <div class="max-w-7xl mx-auto px-4 h-20 flex justify-between items-center">
      <!-- Brand Logo -->
      <a href="<?php echo htmlspecialchars($canonical_url); ?>" class="flex items-center gap-2 focus:outline-none flex-shrink-0" aria-label="Appliance Repair Knights">
        <picture>
          <source srcset="../img/logo.webp" type="image/webp">
          <img src="../img/logo-opt.png" alt="Appliance Repair Knights Logo" width="220" height="64" class="h-12 sm:h-14 w-auto object-contain" fetchpriority="high">
        </picture>
      </a>

      <!-- Top Right Header CTA (On Mobile: Call button only, Book Online hidden) -->
      <div class="flex items-center gap-2 sm:gap-3">
        <a href="tel:9057178905" onclick="trackGtmCall('header_call')" class="gtm-ppc-call gtm-ppc-call-header bg-brandOrange hover:bg-brandOrangeHover text-white font-bold px-3.5 py-2 sm:px-5 sm:py-2.5 rounded-xl text-xs sm:text-sm transition-all flex items-center gap-1.5 shadow-sm">
          <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
          </svg>
          <span class="hidden sm:inline">CALL:</span> <span>905-717-8905</span>
        </a>
        <a href="#ppc-quote-modal" onclick="openLeadModal(); return false;" class="hidden sm:inline-flex bg-brandBlue hover:bg-brandDarkBlue text-white font-extrabold px-3.5 py-2.5 sm:px-5 sm:py-2.5 rounded-xl text-xs sm:text-sm uppercase tracking-wider transition-all shadow-sm items-center gap-1">
          <span>Book Online</span>
        </a>
      </div>
    </div>
  </header>

  <main>
    <!-- 1. HERO SECTION: CLEAN PRODUCT FOCUS (MATCHING REFERENCE DESIGN) -->
    <section class="py-4 sm:py-12 lg:py-16 bg-white relative overflow-hidden" id="about-service">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 sm:gap-8 lg:gap-12 items-center">

          <!-- Left: Appliance Showcase (Compact on mobile so headline and CTA are immediately visible above fold) -->
          <div class="lg:col-span-5 flex justify-center">
            <div class="relative bg-slate-50 p-2 sm:p-5 lg:p-8 rounded-2xl sm:rounded-3xl border border-slate-200/80 shadow-xs sm:shadow-md w-full max-w-[150px] sm:max-w-xs lg:max-w-md flex flex-col items-center justify-center">
              <img src="<?php echo htmlspecialchars($srv['hero_img']); ?>" alt="Same-Day <?php echo htmlspecialchars($srv['name']); ?> Repair in <?php echo htmlspecialchars($city_name); ?>" width="380" height="360" class="w-full h-auto max-h-[85px] sm:max-h-[190px] lg:max-h-[290px] object-contain drop-shadow-xs sm:drop-shadow-md">
              <div class="mt-1.5 sm:mt-4 pt-1 sm:pt-3 border-t border-slate-200 w-full flex items-center justify-between text-[9px] sm:text-xs text-slate-500 font-semibold">
                <span class="flex items-center gap-0.5 sm:gap-1"><span class="text-emerald-600 font-black">✓</span> OEM Parts</span>
                <span class="flex items-center gap-0.5 sm:gap-1"><span class="text-emerald-600 font-black">✓</span> Same-Day</span>
              </div>
            </div>
          </div>

          <!-- Right: Hero Typography & Direct CTAs -->
          <div class="lg:col-span-7 space-y-4 sm:space-y-5 text-center lg:text-left">
            <h1 class="text-2xl sm:text-3xl lg:text-4xl font-heading font-bold text-slate-900 tracking-tight uppercase leading-tight">
              <?php echo htmlspecialchars(strtoupper($srv['name'])); ?> REPAIR
            </h1>

            <p class="text-brandOrange font-semibold text-xs sm:text-sm tracking-widest uppercase">
              FAST DIAGNOSTIC &amp; SAME-DAY REPAIR NEAR YOU
            </p>

            <!-- Dual Action Call & Book Buttons -->
            <div class="flex flex-wrap items-center justify-center lg:justify-start gap-3 pt-1 pb-1">
              <a href="tel:9057178905" onclick="trackGtmCall('hero_call')" class="gtm-ppc-call gtm-ppc-call-hero bg-brandOrange hover:bg-brandOrangeHover text-white font-bold px-6 py-3 rounded-xl text-sm sm:text-base uppercase tracking-wider transition-all shadow-md hover:shadow-lg flex items-center gap-2 transform active:scale-95">
                <svg class="w-5 h-5 flex-shrink-0 animate-bounce" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                </svg>
                <span>CALL 905-717-8905</span>
              </a>

              <a href="#ppc-quote-modal" onclick="openLeadModal(); return false;" class="bg-brandBlue hover:bg-brandDarkBlue text-white font-extrabold px-6 py-3.5 rounded-xl text-sm sm:text-base uppercase tracking-wider transition-all shadow-md flex items-center gap-2 transform active:scale-95 cursor-pointer">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                <span>BOOK ONLINE</span>
              </a>
            </div>

            <!-- Service Description Paragraph -->
            <div class="space-y-3 pt-2 text-slate-700 text-sm sm:text-base leading-relaxed text-left">
              <h2 class="text-xs sm:text-sm font-heading font-bold text-slate-900 uppercase tracking-wider border-b border-slate-200 pb-1 inline-block">
                SAME-DAY <?php echo htmlspecialchars(strtoupper($srv['name'])); ?> SERVICE NEAR YOU
              </h2>
              <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                <?php echo htmlspecialchars($srv['desc']); ?> Our certified local technicians arrive in fully equipped mobile service vehicles carrying genuine factory parts for all major brands, providing transparent upfront written quotes before any repair begins.
              </p>
            </div>

            <!-- Trust Pills -->
            <div class="pt-2 flex flex-wrap items-center justify-center lg:justify-start gap-2 text-xs font-semibold text-slate-700">
              <span class="inline-flex items-center gap-1 bg-slate-100 border border-slate-200 px-3 py-1 rounded-md"><span>🛡️</span> Upfront Written Quote</span>
              <span class="inline-flex items-center gap-1 bg-emerald-50 text-emerald-800 border border-emerald-300 px-3 py-1 rounded-md font-bold"><span>✓</span> Diagnostic Fee Waived w/ Repair</span>
              <span class="inline-flex items-center gap-1 bg-slate-100 border border-slate-200 px-3 py-1 rounded-md"><span>⭐</span> 5.0 Google Rating</span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- 2. VALUE PROPOSITION STRIP (MATCHING REFERENCE DESIGN 4 PILLARS) -->
    <section class="bg-brandBlue text-white py-6 border-y border-brandDarkBlue/30 shadow-inner">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6 text-center lg:text-left">

          <!-- Pillar 1 -->
          <div class="flex flex-col sm:flex-row items-center gap-3">
            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center shrink-0">
              <svg class="w-6 h-6 text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div>
              <span class="block text-xs uppercase tracking-wider text-slate-200">Fast Response</span>
              <span class="block font-heading font-bold text-sm sm:text-base leading-tight">Same-Day Service</span>
            </div>
          </div>

          <!-- Pillar 2 -->
          <div class="flex flex-col sm:flex-row items-center gap-3">
            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center shrink-0">
              <svg class="w-6 h-6 text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div>
              <span class="block text-xs uppercase tracking-wider text-slate-200">Transparent</span>
              <span class="block font-heading font-bold text-sm sm:text-base leading-tight">Affordable Rates</span>
            </div>
          </div>

          <!-- Pillar 3 -->
          <div class="flex flex-col sm:flex-row items-center gap-3">
            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center shrink-0">
              <svg class="w-6 h-6 text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            </div>
            <div>
              <span class="block text-xs uppercase tracking-wider text-slate-200">Daily Dispatch</span>
              <span class="block font-heading font-bold text-sm sm:text-base leading-tight">8:00 AM – 8:00 PM</span>
            </div>
          </div>

          <!-- Pillar 4 -->
          <div class="flex flex-col sm:flex-row items-center gap-3">
            <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center shrink-0">
              <svg class="w-6 h-6 text-amber-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
            </div>
            <div>
              <span class="block text-xs uppercase tracking-wider text-slate-200">Licensed Pros</span>
              <span class="block font-heading font-bold text-sm sm:text-base leading-tight">Certified Techs</span>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- 3. TWO SIDE-BY-SIDE CARDS: COMMON PROBLEMS & APPLIANCE TYPES (EXACT CLIENT DESIGN) -->
    <section class="py-12 sm:py-16 bg-slate-50 border-b border-brandBorder" id="services-problems">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">

          <!-- Left Card: Common Appliance Problems -->
          <div class="bg-white p-6 sm:p-8 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between">
            <div>
              <h3 class="text-sm sm:text-base font-heading font-bold text-slate-800 uppercase tracking-wide mb-4 pb-2 border-b border-slate-100 flex items-center justify-between">
                <span>COMMON <?php echo htmlspecialchars(strtoupper($srv['name'])); ?> PROBLEMS</span>
                <span class="text-xs text-brandOrange font-bold">Diagnosed Daily</span>
              </h3>
              <ul class="space-y-3.5 text-xs sm:text-sm text-slate-700 font-medium">
                <?php foreach ($srv['pills'] as $pill): ?>
                <li class="flex items-center gap-3">
                  <span class="w-2.5 h-2.5 rounded-full bg-brandOrange shrink-0"></span>
                  <span><?php echo htmlspecialchars($pill); ?></span>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <div class="mt-6 pt-4 border-t border-slate-100">
              <a href="tel:9057178905" onclick="trackGtmCall('problem_card_call')" class="text-xs font-bold text-brandOrange hover:underline flex items-center gap-1">
                <span>Diagnose your symptom today →</span>
              </a>
            </div>
          </div>

          <!-- Right Card: Types of Appliance We Repair -->
          <div class="bg-white p-6 sm:p-8 rounded-2xl border border-slate-200 shadow-sm flex flex-col justify-between">
            <div>
              <h3 class="text-sm sm:text-base font-heading font-bold text-slate-800 uppercase tracking-wide mb-4 pb-2 border-b border-slate-100 flex items-center justify-between">
                <span>TYPES OF <?php echo htmlspecialchars(strtoupper($srv['name'])); ?>S WE REPAIR</span>
                <span class="text-xs text-brandBlue font-bold">All Makes</span>
              </h3>
              <ul class="space-y-3.5 text-xs sm:text-sm text-slate-700 font-medium">
                <?php foreach ($current_types as $type_name): ?>
                <li class="flex items-center gap-3">
                  <span class="w-2.5 h-2.5 rounded-full bg-brandBlue shrink-0"></span>
                  <span><?php echo htmlspecialchars($type_name); ?></span>
                </li>
                <?php endforeach; ?>
              </ul>
            </div>
            <div class="mt-6 pt-4 border-t border-slate-100">
              <a href="#ppc-quote-modal" onclick="openLeadModal(); return false;" class="text-xs font-bold text-brandBlue hover:underline flex items-center gap-1">
                <span>Schedule maintenance or repair →</span>
              </a>
            </div>
          </div>

        </div>
      </div>
    </section>

    <!-- 4. CHOOSE APPLIANCE REPAIR KNIGHTS (WITH TECHNICIANS & SERVICE VAN IMAGE) -->
    <section class="py-14 sm:py-20 bg-white border-b border-brandBorder" id="why-choose-us">
      <div class="max-w-6xl mx-auto px-4 sm:px-6">

        <div class="text-center mb-12">
          <h2 class="text-xl sm:text-2xl lg:text-3xl font-heading font-bold text-slate-900 uppercase tracking-tight mb-2">
            CHOOSE APPLIANCE REPAIR KNIGHTS
          </h2>
          <p class="text-slate-600 text-xs sm:text-sm max-w-xl mx-auto font-medium">
            Quality &amp; Reliable Services at Competitive Rates Near You
          </p>
          <div class="w-16 h-1 bg-brandOrange mx-auto mt-3 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">

          <!-- Left: 3 Feature Blocks (Time, Quality, Price) -->
          <div class="lg:col-span-6 space-y-6">

            <!-- Item 1: TIME -->
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 rounded-xl bg-orange-50 text-brandOrange flex items-center justify-center shrink-0 shadow-2xs">
                <svg class="w-6 h-6 text-brandOrange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              </div>
              <div>
                <h3 class="text-sm font-heading font-bold text-slate-900 uppercase tracking-wide mb-1">TIME</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-medium">
                  Same-day rapid dispatch across <?php echo htmlspecialchars($city_name); ?>. Our local technicians arrive with stocked service vehicles to diagnose and resolve appliance issues on the first visit.
                </p>
              </div>
            </div>

            <!-- Item 2: QUALITY -->
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 rounded-xl bg-blue-50 text-brandBlue flex items-center justify-center shrink-0 shadow-2xs">
                <svg class="w-6 h-6 text-brandBlue" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
              </div>
              <div>
                <h3 class="text-sm font-heading font-bold text-slate-900 uppercase tracking-wide mb-1">QUALITY</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-medium">
                  Licensed and factory-trained technicians using genuine OEM parts. Every repair is backed by our comprehensive written warranty on parts and labour.
                </p>
              </div>
            </div>

            <!-- Item 3: PRICE -->
            <div class="flex items-start gap-4">
              <div class="w-12 h-12 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center shrink-0 shadow-2xs">
                <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
              </div>
              <div>
                <h3 class="text-sm font-heading font-bold text-slate-900 uppercase tracking-wide mb-1">PRICE</h3>
                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-medium">
                  Transparent, upfront written quotes before any repair begins. Our diagnostic service call fee is completely waived when you proceed with the repair.
                </p>
              </div>
            </div>

          </div>

          <!-- Right: Team & Service Van Asset matching reference -->
          <div class="lg:col-span-6 flex justify-center">
            <div class="relative w-full max-w-lg">
              <picture>
                <source srcset="../img/appliance-repair-knight-with-branded-van.webp" type="image/webp">
                <img src="../img/appliance-repair-knight-with-branded-van.webp" alt="Appliance Repair Knight with Branded Service Van" width="540" height="360" class="w-full h-auto object-contain drop-shadow-xl rounded-2xl">
              </picture>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- 5. CALL STRIP (UNDER WHY CHOOSE US - POLISHED HIGH-CONVERTING CTA BAR) -->
    <section class="ppc-cta-strip">
      <div class="ppc-cta-strip-inner">
        
        <!-- Left Dispatch Info with Clean Pill & Status -->
        <div class="ppc-cta-left">
          <div class="ppc-cta-icon-box">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
            </svg>
          </div>
          <div>
            <div class="ppc-cta-badge">
              <span class="ppc-cta-pulse-dot"></span>
              <span>Fast Direct Dispatch</span>
            </div>
            <a href="tel:9057178905" onclick="trackGtmCall('banner_call_text')" class="ppc-cta-phone-link">
              Call: (905) 717-8905
            </a>
            <div class="ppc-cta-subtext">Priority arrivals across <?php echo htmlspecialchars($city_name); ?> &amp; GTA • Fee waived with repair</div>
          </div>
        </div>

        <!-- Right Action Buttons -->
        <div class="ppc-cta-actions">
          <a href="tel:9057178905" onclick="trackGtmCall('banner_call')" class="gtm-ppc-call ppc-cta-btn-call">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
            </svg>
            <span>CALL 905-717-8905</span>
          </a>
          <a href="#ppc-quote-modal" onclick="openLeadModal(); return false;" class="ppc-cta-btn-book">
            <svg class="w-4 h-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
            </svg>
            <span>BOOK ONLINE</span>
          </a>
        </div>
      </div>
    </section>

    <!-- 6. SINGLE CARD CUSTOMER REVIEWS (CLEAN CAROUSEL STYLE MATCHING REFERENCE) -->
    <section class="py-14 sm:py-20 bg-white border-b border-brandBorder" id="reviews">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center">

        <h2 class="text-xl sm:text-2xl font-heading font-bold text-slate-900 uppercase tracking-tight mb-2">
          CUSTOMER REVIEWS
        </h2>
        <p class="text-slate-600 text-xs sm:text-sm max-w-md mx-auto mb-8 font-medium">
          What Our Local Homeowners Say Near You
        </p>

        <!-- Centered Single Review Box with Slider Arrows -->
        <div class="relative bg-slate-50 p-6 sm:p-10 rounded-2xl border border-slate-200 shadow-sm max-w-2xl mx-auto">
          <div class="text-amber-400 text-base sm:text-lg mb-3 tracking-wide">★★★★★</div>
          <p id="review-text" class="text-slate-700 text-xs sm:text-sm md:text-base italic leading-relaxed mb-4">
            "My washing machine broke but these guys completely saved the day. The technician arrived on time, diagnosed the issue quickly, and fixed it with zero hidden fees. Reliable same-day service!"
          </p>
          <div class="text-xs font-heading font-bold text-brandDarkBlue" id="review-author">
            — Shehraj Singh, Brampton
          </div>

          <!-- Subtle Prev / Next Navigation -->
          <div class="flex items-center justify-center gap-4 mt-6">
            <button onclick="prevReview()" class="w-8 h-8 rounded-full border border-slate-300 text-slate-600 hover:text-brandOrange hover:border-brandOrange flex items-center justify-center text-sm font-bold transition-colors">
              ‹
            </button>
            <span class="text-[11px] text-slate-400 font-semibold" id="review-counter">1 / 5</span>
            <button onclick="nextReview()" class="w-8 h-8 rounded-full border border-slate-300 text-slate-600 hover:text-brandOrange hover:border-brandOrange flex items-center justify-center text-sm font-bold transition-colors">
              ›
            </button>
          </div>
        </div>

      </div>
    </section>

    <!-- 7. WASHER / APPLIANCE BRANDS (CLEAN MULTI-COLUMN LIST MATCHING REFERENCE) -->
    <section class="py-12 sm:py-16 bg-slate-50 border-b border-brandBorder" id="brands">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 text-center">

        <h2 class="text-xl sm:text-2xl font-heading font-bold text-slate-900 uppercase tracking-tight mb-2">
          <?php echo htmlspecialchars(strtoupper($srv['name'])); ?> BRANDS
        </h2>
        <p class="text-slate-600 text-xs sm:text-sm max-w-md mx-auto mb-8 font-medium">
          We Service All Major Brands With Genuine OEM Parts
        </p>

        <!-- Multi-column clean grid (5 columns desktop, matching reference design) -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-y-3 gap-x-4 text-xs sm:text-sm text-slate-700 font-semibold text-left max-w-4xl mx-auto">
          <?php foreach ($all_brand_names as $bname): ?>
          <div class="flex items-center gap-2">
            <span class="w-1.5 h-1.5 rounded-full bg-brandOrange shrink-0"></span>
            <span><?php echo htmlspecialchars($bname); ?></span>
          </div>
          <?php endforeach; ?>
        </div>

      </div>
    </section>


    <!-- 9. SERVICE AREAS LIST (CLEAN MULTI-COLUMN GRID MATCHING REFERENCE) -->
    <section class="py-12 sm:py-16 bg-slate-50 border-b border-brandBorder" id="service-areas">
      <div class="max-w-6xl mx-auto px-4 sm:px-6 text-center">

        <h2 class="text-xl sm:text-2xl font-heading font-bold text-slate-900 uppercase tracking-tight mb-2">
          SERVICE AREAS
        </h2>
        <p class="text-slate-600 text-xs sm:text-sm max-w-md mx-auto mb-8 font-medium">
          Fast Dispatch • Licensed Local Technicians On Standby Near You
        </p>

        <!-- Clean Multi-column Grid -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-y-3 gap-x-4 text-xs sm:text-sm text-slate-700 font-semibold text-left max-w-5xl mx-auto">
          <?php foreach ($all_service_cities as $cname): ?>
          <div class="flex items-center gap-2">
            <span class="w-1.5 h-1.5 rounded-full bg-brandBlue shrink-0"></span>
            <span><?php echo htmlspecialchars($cname); ?></span>
          </div>
          <?php endforeach; ?>
        </div>

      </div>
    </section>

    <!-- 10. BOOK YOUR REPAIR TODAY (FINAL PRE-FOOTER CTA MATCHING REFERENCE) -->
    <section class="py-14 sm:py-20 bg-white text-center border-b border-brandBorder" id="final-cta">
      <div class="max-w-3xl mx-auto px-4 sm:px-6 space-y-4">
        <h2 class="text-xl sm:text-2xl font-heading font-bold text-slate-900 uppercase tracking-tight">
          BOOK YOUR <?php echo htmlspecialchars(strtoupper($srv['name'])); ?> REPAIR TODAY
        </h2>
        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed max-w-xl mx-auto">
          Don't wait while laundry piles up or broken appliances cause disruption. Call our priority dispatch center now or request a callback to secure your same-day repair appointment near you.
        </p>
        <div class="pt-2 flex flex-wrap items-center justify-center gap-3">
          <a href="tel:9057178905" onclick="trackGtmCall('bottom_cta_call')" class="gtm-ppc-call bg-brandOrange hover:bg-brandOrangeHover text-white font-bold px-7 py-3 rounded-xl text-xs sm:text-sm uppercase tracking-wider transition-all shadow-md flex items-center gap-2">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
            <span>CALL 905-717-8905</span>
          </a>
          <a href="#ppc-quote-modal" onclick="openLeadModal(); return false;" class="bg-brandBlue hover:bg-brandDarkBlue text-white font-extrabold px-6 py-3.5 rounded-xl text-xs sm:text-sm uppercase tracking-wider transition-all shadow-sm">
            <span>BOOK ONLINE</span>
          </a>
        </div>
      </div>
    </section>
  </main>

  <!-- 11. HIGH-CONVERTING TRUST FOOTER & DISPATCH DIRECTORY -->
  <footer class="ppc-footer-root pt-0 pb-28 sm:pb-14 text-xs font-sans">
    
    <!-- Top Value & Guarantee Assurance Bar -->
    <div class="ppc-trust-strip py-6 px-4 sm:px-6">
      <div class="max-w-6xl mx-auto ppc-trust-strip-grid">
        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-emerald-500/15 border border-emerald-500/30 flex items-center justify-center shrink-0 text-emerald-400">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          </div>
          <div>
            <div class="font-heading font-extrabold text-white text-xs">Fee Waived w/ Repair</div>
            <div class="text-[11px] text-slate-400">Diagnostic fee credited on repair</div>
          </div>
        </div>

        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-amber-500/15 border border-amber-500/30 flex items-center justify-center shrink-0 text-amber-400">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
          </div>
          <div>
            <div class="font-heading font-extrabold text-white text-xs">Written Warranty</div>
            <div class="text-[11px] text-slate-400">Parts &amp; labour fully guaranteed</div>
          </div>
        </div>

        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-blue-500/15 border border-blue-500/30 flex items-center justify-center shrink-0 text-blue-400">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
          </div>
          <div>
            <div class="font-heading font-extrabold text-white text-xs">Certified Technicians</div>
            <div class="text-[11px] text-slate-400">Factory-trained &amp; insured</div>
          </div>
        </div>

        <div class="flex items-center gap-3">
          <div class="w-10 h-10 rounded-xl bg-orange-500/15 border border-orange-500/30 flex items-center justify-center shrink-0 text-brandOrange">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
          </div>
          <div>
            <div class="font-heading font-extrabold text-white text-xs">Prompt GTA Dispatch</div>
            <div class="text-[11px] text-slate-400">Available daily across Toronto</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Footer Multi-Column Grid -->
    <div class="max-w-6xl mx-auto px-4 sm:px-6 pt-12 pb-10">
      <div class="ppc-footer-grid pb-12 border-b border-slate-800/80">

        <!-- Column 1: Brand Authority & Rapid Dispatch Hub -->
        <div class="ppc-footer-col">
          <picture>
            <source srcset="../img/Appliance_Repair_Knights_Logo-white.avif" type="image/avif">
            <source srcset="../img/logo.webp" type="image/webp">
            <img src="../img/logo-opt.png" alt="Appliance Repair Knights Logo" width="190" height="46" class="h-10 w-auto object-contain brightness-0 invert opacity-95">
          </picture>
          <p class="text-xs text-slate-400 leading-relaxed max-w-sm m-0">
            Certified residential appliance repair specialists providing same-day diagnostics, genuine OEM replacement parts, and factory-grade repairs across the Greater Toronto Area.
          </p>

          <!-- Live Dispatch Status Card -->
          <div class="bg-slate-900/90 border border-slate-800 rounded-2xl p-3.5 space-y-2 max-w-xs shadow-inner">
            <div class="flex items-center justify-between text-[11px]">
              <span class="inline-flex items-center gap-1.5 font-bold text-emerald-400">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                Dispatch Active Today
              </span>
              <span class="text-slate-400">8:00 AM – 8:00 PM</span>
            </div>
            <div class="text-[11px] text-slate-400">
              Same-day service vans ready for immediate <?php echo htmlspecialchars($city_name); ?> &amp; GTA dispatch.
            </div>
          </div>

          <!-- Direct Dual Conversion Buttons -->
          <div class="pt-1 flex flex-wrap items-center gap-2.5">
            <a href="tel:9057178905" onclick="trackGtmCall('footer_call')" class="inline-flex items-center gap-2 bg-brandOrange hover:bg-brandOrangeHover text-white font-black px-4 py-2.5 rounded-xl text-xs uppercase tracking-wider transition-all shadow-md active:scale-95">
              <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
              <span>905-717-8905</span>
            </a>
            <a href="#ppc-quote-modal" onclick="openLeadModal(); return false;" class="inline-flex items-center gap-1.5 bg-white/10 hover:bg-white/20 text-white font-bold px-4 py-2.5 rounded-xl text-xs uppercase tracking-wider transition-all border border-white/20 active:scale-95">
              <svg class="w-3.5 h-3.5 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
              <span>Book Callback</span>
            </a>
          </div>
        </div>

        <!-- Column 2: Residential Services -->
        <div class="ppc-footer-col">
          <div class="ppc-footer-heading">
            <span>Our Services</span>
            <span class="ppc-footer-heading-bar"></span>
          </div>
          <ul class="ppc-footer-list text-xs">
            <li><a href="#about-service" class="ppc-footer-link"><span>›</span> Washing Machine Repair</a></li>
            <li><a href="#about-service" class="ppc-footer-link"><span>›</span> Refrigerator &amp; Freezer Repair</a></li>
            <li><a href="#about-service" class="ppc-footer-link"><span>›</span> Clothes Dryer Repair</a></li>
            <li><a href="#about-service" class="ppc-footer-link"><span>›</span> Dishwasher Repair &amp; Diagnostics</a></li>
            <li><a href="#about-service" class="ppc-footer-link"><span>›</span> Oven, Range &amp; Stove Repair</a></li>
            <li><a href="#about-service" class="ppc-footer-link"><span>›</span> Built-In Microwave Repair</a></li>
          </ul>
        </div>

        <!-- Column 3: GTA Service Zones -->
        <div class="ppc-footer-col">
          <div class="ppc-footer-heading">
            <span>GTA Coverage</span>
            <span class="ppc-footer-heading-bar"></span>
          </div>
          <ul class="ppc-footer-list text-xs text-slate-400">
            <li class="flex items-center gap-1.5"><span class="text-brandOrange font-bold">✓</span> Toronto &amp; Downtown Core</li>
            <li class="flex items-center gap-1.5"><span class="text-brandOrange font-bold">✓</span> North York, Scarborough &amp; Etobicoke</li>
            <li class="flex items-center gap-1.5"><span class="text-brandOrange font-bold">✓</span> Mississauga, Brampton &amp; Peel</li>
            <li class="flex items-center gap-1.5"><span class="text-brandOrange font-bold">✓</span> Vaughan, Woodbridge &amp; Richmond Hill</li>
            <li class="flex items-center gap-1.5"><span class="text-brandOrange font-bold">✓</span> Markham, Thornhill &amp; York Region</li>
            <li class="flex items-center gap-1.5"><span class="text-brandOrange font-bold">✓</span> Oakville, Burlington &amp; Halton</li>
          </ul>
          <div class="pt-1 text-[11px] text-slate-400 leading-snug">
            Mobile technicians stationed locally for fast residential arrivals.
          </div>
        </div>

        <!-- Column 4: Trust, Safety & Compliance -->
        <div class="ppc-footer-col">
          <div class="ppc-footer-heading">
            <span>Safety &amp; Compliance</span>
            <span class="ppc-footer-heading-bar"></span>
          </div>

          <!-- Trust Badges -->
          <div class="flex flex-wrap gap-1.5">
            <span class="ppc-badge-chip border-emerald-500/40 text-emerald-300 bg-emerald-950/40">
              <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> WSIB Insured
            </span>
            <span class="ppc-badge-chip border-blue-500/40 text-blue-300 bg-blue-950/40">
              <span class="w-1.5 h-1.5 rounded-full bg-blue-400"></span> Certified Techs
            </span>
            <span class="ppc-badge-chip border-amber-500/40 text-amber-300 bg-amber-950/40">
              <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span> OEM Parts
            </span>
          </div>

          <!-- Payment Options -->
          <div>
            <div class="ppc-footer-subheading">Accepted Payment</div>
            <div class="flex flex-wrap items-center gap-1.5">
              <span class="bg-white/10 px-2 py-1 rounded text-[10px] text-white font-semibold">Interac</span>
              <span class="bg-white/10 px-2 py-1 rounded text-[10px] text-white font-semibold">VISA</span>
              <span class="bg-white/10 px-2 py-1 rounded text-[10px] text-white font-semibold">MasterCard</span>
              <span class="bg-white/10 px-2 py-1 rounded text-[10px] text-white font-semibold">AMEX</span>
              <span class="bg-white/10 px-2 py-1 rounded text-[10px] text-white font-semibold">Cash</span>
            </div>
          </div>

          <!-- Legal Policy Quick Links -->
          <div class="pt-2 flex flex-wrap gap-x-4 gap-y-1.5 text-[11px] text-slate-400">
            <a href="../privacy-policy" target="_blank" class="hover:text-white transition-colors underline decoration-slate-700">Privacy Policy</a>
            <a href="../terms-and-conditions" target="_blank" class="hover:text-white transition-colors underline decoration-slate-700">Terms of Service</a>
            <a href="../disclaimer" target="_blank" class="hover:text-white transition-colors underline decoration-slate-700">Google Ads Disclaimer</a>
          </div>
        </div>

      </div>

      <!-- Copyright & Transparent Legal Disclaimer -->
      <div class="pt-6 space-y-3 text-center text-slate-400">
        <p class="text-[11px] font-medium text-slate-300">
          &copy; 2026 Appliance Repair Knights Ltd. All Rights Reserved. Fully Licensed &amp; Insured Residential Service Provider in Ontario.
        </p>
        <p class="text-[10px] text-slate-400 max-w-4xl mx-auto leading-relaxed">
          <strong>Notice:</strong> Appliance Repair Knights is an independent residential appliance repair company. All brand names, trademarks, model designations, and logos (including Samsung, LG, Whirlpool, Bosch, GE, KitchenAid, Maytag, Frigidaire, Sub-Zero, and others) are property of their respective owners and are displayed purely to describe service and parts compatibility. Transparent upfront written quotes are provided before any repair begins.
        </p>
      </div>
    </div>
  </footer>

  <!-- STICKY MOBILE CALL & BOOKING BAR (ULTRA CONVERTING & THUMB OPTIMIZED) -->
  <div class="fixed bottom-0 left-0 right-0 z-50 bg-slate-950/95 backdrop-blur-md px-3 py-2.5 border-t border-slate-800 flex items-center justify-between gap-2 md:hidden shadow-2xl">
    <a href="https://wa.me/19057178905?text=Hi%2C%20I%20need%20appliance%20repair%20service%20in%20the%20GTA" target="_blank" rel="noopener" aria-label="Chat on WhatsApp" class="bg-emerald-600 hover:bg-emerald-700 text-white p-3 rounded-xl text-xs flex items-center justify-center shrink-0 shadow-md active:scale-95 transition-transform">
      <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" /></svg>
    </a>
    <a href="#ppc-quote-modal" onclick="openLeadModal(); return false;" class="shrink-0 bg-white/10 hover:bg-white/20 text-white border border-white/25 font-bold py-3 px-3.5 rounded-xl text-[11px] text-center uppercase tracking-tight shadow-xs active:scale-95 transition-transform flex items-center justify-center">
      <span>BOOK</span>
    </a>
    <a href="tel:9057178905" onclick="trackGtmCall('mobile_bar')" class="flex-grow bg-brandOrange hover:bg-brandOrangeHover text-white font-extrabold py-3 px-3 rounded-xl text-xs sm:text-sm text-center uppercase tracking-wide shadow-md flex items-center justify-center gap-2 active:scale-95 transition-transform">
      <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path></svg>
      <span>CALL 905-717-8905</span>
    </a>
  </div>

  <!-- POPUP LEAD CAPTURE MODAL (HIGH-CONVERTING & INSTANT) -->
  <div id="ppc-quote-modal" class="fixed inset-0 z-50 bg-slate-900/70 backdrop-blur-sm hidden flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl max-w-lg w-full p-6 sm:p-8 shadow-2xl relative border border-slate-200">
      <button onclick="closeLeadModal()" class="absolute top-4 right-4 text-slate-400 hover:text-slate-700 text-2xl font-bold w-8 h-8 rounded-full flex items-center justify-center bg-slate-100">&times;</button>
      
      <div class="mb-4">
        <span class="bg-brandBlue text-white text-[10px] font-black uppercase px-2.5 py-1 rounded-full tracking-wider">Priority Dispatch</span>
        <h3 class="text-lg sm:text-xl font-heading font-bold text-slate-900 mt-2">Request Service Callback</h3>
        <p class="text-xs text-slate-600 mt-1">A certified local technician will call you in &lt;15 mins with arrival schedule and upfront quote.</p>
      </div>

      <form id="ppc-modal-form" onsubmit="event.preventDefault(); submitLeadModal();" class="space-y-3">
        <div>
          <input type="text" id="modal-name" required placeholder="Full Name *" class="w-full px-4 py-3 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brandOrange outline-none font-medium">
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
          <div>
            <input type="tel" id="modal-phone" required placeholder="Phone Number *" class="w-full px-4 py-3 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brandOrange outline-none font-medium">
          </div>
          <div>
            <input type="email" id="modal-email" placeholder="Email Address (Optional)" class="w-full px-4 py-3 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brandOrange outline-none font-medium">
          </div>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
          <div>
            <select id="modal-city" required class="w-full px-3.5 py-3 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brandOrange outline-none bg-white font-medium cursor-pointer">
              <option value="<?php echo htmlspecialchars($city_name); ?>" selected><?php echo htmlspecialchars($city_name); ?></option>
              <option value="Toronto">Toronto</option>
              <option value="Mississauga">Mississauga</option>
              <option value="Brampton">Brampton</option>
              <option value="Vaughan">Vaughan</option>
              <option value="Markham">Markham</option>
              <option value="Oakville">Oakville</option>
              <option value="Burlington">Burlington</option>
              <option value="Hamilton">Hamilton</option>
            </select>
          </div>
          <div>
            <select id="modal-appliance" required class="w-full px-3.5 py-3 rounded-xl border border-slate-300 text-sm focus:ring-2 focus:ring-brandOrange outline-none bg-white font-medium cursor-pointer">
              <option value="<?php echo htmlspecialchars($srv['name']); ?>" selected><?php echo htmlspecialchars($srv['name']); ?></option>
              <option value="Washing Machine">Washing Machine</option>
              <option value="Refrigerator">Refrigerator</option>
              <option value="Clothes Dryer">Clothes Dryer</option>
              <option value="Dishwasher">Dishwasher</option>
              <option value="Oven & Stove">Oven / Stove</option>
              <option value="Microwave">Microwave</option>
            </select>
          </div>
        </div>

        <button type="submit" id="modal-submit-btn" class="w-full bg-brandOrange hover:bg-brandOrangeHover text-white font-extrabold py-3.5 px-5 rounded-xl text-xs sm:text-sm shadow-md transition-all uppercase tracking-wider cursor-pointer mt-2">
          <span>CHECK AVAILABILITY &amp; BOOK →</span>
        </button>

        <p class="text-[11px] text-center text-slate-500 font-medium pt-1">
          ✓ Fee waived w/ repair • Upfront written quote • OEM parts
        </p>
      </form>

      <div id="modal-success" class="hidden bg-emerald-50 border border-emerald-400 p-6 rounded-2xl text-center space-y-2">
        <div class="text-2xl text-emerald-600 font-bold">✓ Request Received!</div>
        <p class="text-xs text-emerald-900 font-medium">A technician will call your number within 15 minutes.</p>
        <a href="tel:9057178905" class="inline-block mt-2 bg-brandDarkBlue text-white text-xs font-bold py-2 px-4 rounded-lg">Call Dispatch: 905-717-8905</a>
      </div>
    </div>
  </div>

  <!-- SCRIPTS FOR REVIEWS, MODAL & LEAD HANDLING -->
  <script>
    window.dataLayer = window.dataLayer || [];
    function trackGtmCall(location) {
      if (typeof loadGTM === 'function') loadGTM();
      window.dataLayer.push({ 'event': 'click_phone_ppc', 'button_location': location, 'value': 1 });
      window.dataLayer.push({ 'event': 'ppc_phone_click', 'click_location': location, 'value': 1 });
    }
    function trackGtmFormSuccess(appliance, city) {
      if (typeof loadGTM === 'function') loadGTM();
      window.dataLayer.push({ 'event': 'ppc_form_success', 'appliance': appliance, 'city': city, 'value': 1 });
      window.dataLayer.push({ 'event': 'generate_lead', 'service': appliance, 'city': city, 'value': 1 });
    }

    // Modal Controller
    function openLeadModal() {
      document.getElementById('ppc-quote-modal').classList.remove('hidden');
    }
    function closeLeadModal() {
      document.getElementById('ppc-quote-modal').classList.add('hidden');
    }

    // Lead Form Submit
    function submitLeadModal() {
      const name = document.getElementById('modal-name').value.trim();
      const phone = document.getElementById('modal-phone').value.trim();
      const email = document.getElementById('modal-email').value.trim();
      const city = document.getElementById('modal-city').value;
      const appliance = document.getElementById('modal-appliance').value;
      const submitBtn = document.getElementById('modal-submit-btn');

      if (!name || !phone) return;
      submitBtn.disabled = true;
      submitBtn.innerText = "SENDING REQUEST...";

      const payload = {
        name: name,
        phone: phone,
        email: email,
        city: city,
        appliance: appliance,
        page: window.location.pathname + window.location.search
      };

      fetch('send-lead.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(payload)
      })
      .then(res => res.json())
      .then(data => {
        if (data.status === 'success') {
          trackGtmFormSuccess(appliance, city);
          document.getElementById('ppc-modal-form').classList.add('hidden');
          document.getElementById('modal-success').classList.remove('hidden');
        } else {
          throw new Error('Server error');
        }
      })
      .catch(() => {
        submitBtn.disabled = false;
        submitBtn.innerText = "CHECK AVAILABILITY & BOOK →";
        alert('Could not submit online. Please call us directly at 905-717-8905 for immediate service.');
      });
    }

    // Review Slider Logic
    const reviewsData = [
      {
        quote: "My washing machine broke but these guys completely saved the day. The technician arrived on time, diagnosed the issue quickly, and fixed it with zero hidden fees. Reliable same-day service!",
        author: "Shehraj Singh, Brampton"
      },
      {
        quote: "Sunny was prompt, professional, and diagnosed our appliance problem accurately. Had the replacement part on the truck and finished the repair in under an hour. Highly recommend!",
        author: "Nafisa Ali, Mississauga"
      },
      {
        quote: "Outstanding same-day service! Called at 9 AM and by 12:30 PM the technician was at our home with the exact factory OEM part. Upfront pricing and very polite.",
        author: "Emily Smith, Toronto"
      },
      {
        quote: "Very impressed with the transparent written quote. The diagnostic fee was completely waived once they fixed the machine. Will definitely call them again.",
        author: "Dan Silverman, Vaughan"
      },
      {
        quote: "Exceptional appliance repair service. Clear communication from the dispatch team and our appliance was running like brand new on the very same visit.",
        author: "Sahibpreet Kaur, Oakville"
      }
    ];
    let curRevIdx = 0;
    function updateReviewUI() {
      document.getElementById('review-text').textContent = `"${reviewsData[curRevIdx].quote}"`;
      document.getElementById('review-author').textContent = `— ${reviewsData[curRevIdx].author}`;
      document.getElementById('review-counter').textContent = `${curRevIdx + 1} / ${reviewsData.length}`;
    }
    function nextReview() {
      curRevIdx = (curRevIdx + 1) % reviewsData.length;
      updateReviewUI();
    }
    function prevReview() {
      curRevIdx = (curRevIdx - 1 + reviewsData.length) % reviewsData.length;
      updateReviewUI();
    }
  </script>

  <!-- Dynamic Client-Side Personalization for Query String URLs (?service=washer&city=toronto) -->
  <script>
    const DYNAMIC_SERVICES = {
      appliance: {
        key: 'appliance',
        name: 'Appliance',
        titleName: 'APPLIANCE',
        serviceLabel: 'SAME-DAY APPLIANCE REPAIR SERVICE NEAR YOU',
        typesTitle: 'TYPES OF APPLIANCES WE REPAIR',
        problemsTitle: 'COMMON HOUSEHOLD APPLIANCE ISSUES',
        heroImg: '../img/appliance-repair-technician-toronto.webp',
        desc: "Don't let broken household appliances disrupt your routine — get fast, same-day appliance repair from licensed local technicians across Toronto & the GTA. We service all major kitchen and laundry appliances including refrigerators, washing machines, clothes dryers, dishwashers, and ovens. Our certified local technicians arrive in fully equipped mobile service vehicles carrying genuine factory parts for all major brands, providing transparent upfront written quotes before any repair begins.",
        problems: [
          'Refrigerator Not Cooling / Freezing Food',
          'Washing Machine Leaking or Not Draining',
          'Clothes Dryer Running With No Heat',
          'Dishwasher Leaving Food Film or Leaking',
          'Oven Temperature Fluctuating / Burner Faults',
          'Strange Noise, Humming or Error Codes'
        ],
        types: [
          'Kitchen Refrigerators & Freezers',
          'Front & Top Load Washing Machines',
          'Electric & Gas Clothes Dryers',
          'Built-In & Portable Dishwashers',
          'Wall Ovens, Stoves & Rangetops',
          'Over-the-Range & Built-In Microwaves'
        ]
      },
      fridge: {
        key: 'fridge',
        name: 'Refrigerator',
        titleName: 'REFRIGERATOR',
        serviceLabel: 'SAME-DAY REFRIGERATOR SERVICE NEAR YOU',
        typesTitle: 'TYPES OF REFRIGERATORS WE REPAIR',
        problemsTitle: 'COMMON REFRIGERATOR PROBLEMS',
        heroImg: '../img/appliance-repair-technician-toronto.webp',
        desc: "Don't let your food spoil — get fast, same-day refrigerator repair from licensed local technicians. We service Samsung, LG, Whirlpool, Bosch, and all major brands, with clear upfront written quotes before work begins. Our certified local technicians arrive in fully equipped mobile service vehicles carrying genuine factory parts for all major brands, providing transparent upfront written quotes before any repair begins.",
        problems: [
          'Fridge Not Cooling / Warm Compartment',
          'Water Leaking on Floor / Defrost Block',
          'Ice Maker Jammed or Not Working',
          'Excessive Freezer Frost & Ice Buildup',
          'Loud Humming, Clicking or Compressor Noise',
          'Door Gasket / Magnetic Seal Leaks'
        ],
        types: [
          'French Door Refrigerators',
          'Side-by-Side Refrigerators',
          'Bottom-Freezer Refrigerators',
          'Top-Freezer Traditional Units',
          'Built-In & Counter-Depth Fridges',
          'Wine Coolers & Beverage Centers'
        ]
      },
      washer: {
        key: 'washer',
        name: 'Washing Machine',
        titleName: 'WASHING MACHINE',
        serviceLabel: 'SAME-DAY WASHING MACHINE SERVICE NEAR YOU',
        typesTitle: 'TYPES OF WASHING MACHINES WE REPAIR',
        problemsTitle: 'COMMON WASHING MACHINE PROBLEMS',
        heroImg: '../img/washing-machine-repair-in-progress.webp',
        desc: 'Get fast, professional washing machine repair from experienced local technicians. We service Samsung, LG, Whirlpool, Maytag, and other major brands, with clear repair estimates before work begins. Our certified local technicians arrive in fully equipped mobile service vehicles carrying genuine factory parts for all major brands, providing transparent upfront written quotes before any repair begins.',
        problems: [
          'Washer Not Draining / Standing Water',
          'Drum Won\'t Spin or Agitate',
          'Violent Shaking & Excessive Vibrations',
          'Water Leaking From Door or Bottom',
          'Lid Lock / Door Latch Stuck Closed',
          'Error Codes & Mid-Cycle Shutoffs'
        ],
        types: [
          'Front-Loading Washing Machines',
          'Top-Loading Agitator Washers',
          'High-Efficiency (HE) Washers',
          'Stackable Washer-Dryer Units',
          'Compact & European Style Washers',
          'Smart Wi-Fi Connected Washers'
        ]
      },
      dryer: {
        key: 'dryer',
        name: 'Clothes Dryer',
        titleName: 'CLOTHES DRYER',
        serviceLabel: 'SAME-DAY DRYER SERVICE NEAR YOU',
        typesTitle: 'TYPES OF DRYERS WE REPAIR',
        problemsTitle: 'COMMON CLOTHES DRYER PROBLEMS',
        heroImg: '../img/clothes-dryer-repair-service.webp',
        desc: 'From heating problems and unusual noises to dryers that won\'t start, our experienced technicians diagnose and repair major dryer brands. Our certified local technicians arrive with fully stocked service vehicles carrying genuine factory parts, providing transparent upfront written quotes before any repair begins.',
        problems: [
          'Dryer Not Heating / Blowing Cold Air',
          'Drum Not Turning or Squeaking Loudly',
          'Takes 2-3 Cycles to Dry Clothes',
          'Dryer Overheating / Burning Smell',
          'Will Not Start / Push-To-Start Fault',
          'Lint Filter & Vent Airflow Restrictions'
        ],
        types: [
          'Electric Vented Dryers',
          'Natural Gas & Propane Dryers',
          'Heat Pump & Condenser Dryers',
          'Front-Loading Match Dryers',
          'Stacked Laundry Centers',
          'Commercial Heavy-Duty Dryers'
        ]
      },
      dishwasher: {
        key: 'dishwasher',
        name: 'Dishwasher',
        titleName: 'DISHWASHER',
        serviceLabel: 'SAME-DAY DISHWASHER SERVICE NEAR YOU',
        typesTitle: 'TYPES OF DISHWASHERS WE REPAIR',
        problemsTitle: 'COMMON DISHWASHER PROBLEMS',
        heroImg: '../img/open-dishwasher-repair.webp',
        desc: 'Fast, professional dishwasher repair from certified local technicians. We service all major brands including Bosch, Samsung, LG, KitchenAid, and Maytag. Our mobile service units carry genuine factory parts and provide transparent upfront written quotes before any repair begins.',
        problems: [
          'Dishwasher Not Draining / Standing Water',
          'Water Leaking From Door Gasket / Base',
          'Dishes Coming Out Dirty / Gritty Film',
          'Buttons Unresponsive / Won\'t Start',
          'No Water Filling / Low Water Pressure',
          'Loud Humming or Grinding Motor Noise'
        ],
        types: [
          'Built-In Under-Counter Dishwashers',
          'Integrated Panel-Ready Units',
          'Double Drawer Dishwashers',
          'Portable Freestanding Dishwashers',
          'Stainless Steel Tall-Tub Units',
          'Commercial Style Dishwashers'
        ]
      },
      stove: {
        key: 'stove',
        name: 'Oven & Stove',
        titleName: 'OVEN & STOVE',
        serviceLabel: 'SAME-DAY OVEN & STOVE SERVICE NEAR YOU',
        typesTitle: 'TYPES OF OVENS & STOVES WE REPAIR',
        problemsTitle: 'COMMON OVEN & STOVE PROBLEMS',
        heroImg: '../img/oven-dryer-repair-service.webp',
        desc: 'Expert oven, range, and stove repair from licensed local technicians. We fix gas, electric, and induction units from all major brands including Samsung, LG, GE, Bosch, and KitchenAid. Fully stocked service vehicles with genuine OEM parts and transparent upfront written quotes before any repair begins.',
        problems: [
          'Oven Not Heating or Uneven Baking',
          'Gas Burners Clicking Continuously',
          'Electric Burner Element Not Turning On',
          'Oven Temperature Sensor Out of Calibration',
          'Oven Door Lock Stuck on Self-Clean',
          'Touchpad Control Board Error Codes'
        ],
        types: [
          'Smooth Ceramic Glass Cooktops',
          'Gas Sealed-Burner Rangetops',
          'Electric Single & Double Wall Ovens',
          'Slide-In & Freestanding Ranges',
          'Magnetic Induction Cooktops',
          'Commercial Style Cooking Ranges'
        ]
      },
      microwave: {
        key: 'microwave',
        name: 'Microwave',
        titleName: 'MICROWAVE',
        serviceLabel: 'SAME-DAY MICROWAVE SERVICE NEAR YOU',
        typesTitle: 'TYPES OF MICROWAVES WE REPAIR',
        problemsTitle: 'COMMON MICROWAVE PROBLEMS',
        heroImg: '../img/microwave-repair.webp',
        desc: 'Fast, reliable microwave repair from certified local technicians. We service over-the-range, built-in, and countertop microwaves from Samsung, LG, Panasonic, Whirlpool, and all major brands. Clear upfront written quotes with diagnostic fee completely waived when you proceed with repair.',
        problems: [
          'Microwave Not Heating Food / Cold Inside',
          'Sparking or Electrical Arcing in Cavity',
          'Glass Turntable Plate Not Turning',
          'Touchpad Buttons Completely Unresponsive',
          'Trips Breaker When Door Closes',
          'Loud Humming or Buzzing Noise'
        ],
        types: [
          'Over-The-Range (OTR) Microwaves',
          'Built-In Pull-Out Drawer Microwaves',
          'Countertop High-Wattage Units',
          'Convection Microwave Combos',
          'Commercial Breakroom Microwaves',
          'Built-In Trim-Kit Microwaves'
        ]
      }
    };

    function applyDynamicPersonalization() {
      const urlParams = new URLSearchParams(window.location.search);
      const serviceParam = (urlParams.get('service') || '').toLowerCase().trim();
      const cityParam = (urlParams.get('city') || '').toLowerCase().trim();

      if (!serviceParam && !cityParam) return;

      let matchedService = null;
      if (['washer', 'washing', 'washing-machine'].includes(serviceParam)) matchedService = DYNAMIC_SERVICES.washer;
      else if (['fridge', 'refrigerator', 'freezer'].includes(serviceParam)) matchedService = DYNAMIC_SERVICES.fridge;
      else if (['dryer', 'clothes-dryer'].includes(serviceParam)) matchedService = DYNAMIC_SERVICES.dryer;
      else if (['dishwasher'].includes(serviceParam)) matchedService = DYNAMIC_SERVICES.dishwasher;
      else if (['stove', 'oven', 'range', 'cooktop'].includes(serviceParam)) matchedService = DYNAMIC_SERVICES.stove;
      else if (['microwave'].includes(serviceParam)) matchedService = DYNAMIC_SERVICES.microwave;
      else if (['appliance', 'all', 'repair'].includes(serviceParam)) matchedService = DYNAMIC_SERVICES.appliance;

      const cityName = cityParam ? (cityParam.charAt(0).toUpperCase() + cityParam.slice(1)) : '';

      if (matchedService) {
        document.title = `Same-Day ${matchedService.name} Repair in ${cityName || 'Toronto & GTA'} | Local Certified Technicians`;

        // H1 heading
        const h1 = document.querySelector('h1');
        if (h1) h1.textContent = `${matchedService.titleName} REPAIR`;

        // Orange sub-title
        const subTitle = document.querySelector('p.text-brandOrange');
        if (subTitle) subTitle.textContent = `FAST DIAGNOSTIC & SAME-DAY REPAIR NEAR YOU`;

        // Hero image
        const heroImg = document.querySelector('#about-service img');
        if (heroImg && matchedService.heroImg) heroImg.src = matchedService.heroImg;

        // Hero service sub-heading (h2 "SAME-DAY X SERVICE NEAR YOU")
        const heroH2 = document.querySelector('#about-service h2');
        if (heroH2 && matchedService.serviceLabel) heroH2.textContent = matchedService.serviceLabel;

        // Hero description paragraph
        const heroDesc = document.querySelector('#about-service p.text-slate-600');
        if (heroDesc && matchedService.desc) heroDesc.textContent = matchedService.desc;

        // Problems section
        const probHeader = document.querySelector('#services-problems h3:first-child');
        if (probHeader) probHeader.innerHTML = `<span>${matchedService.problemsTitle}</span><span class="text-xs text-brandOrange font-bold">Diagnosed Daily</span>`;

        const probList = document.querySelector('#services-problems ul:first-of-type');
        if (probList && matchedService.problems) {
          probList.innerHTML = matchedService.problems.map(p => `
            <li class="flex items-center gap-3">
              <span class="w-2.5 h-2.5 rounded-full bg-brandOrange shrink-0"></span>
              <span>${p}</span>
            </li>
          `).join('');
        }

        // Types section
        const typesCards = document.querySelectorAll('#services-problems > div > div > div');
        if (typesCards.length > 1) {
          const typesH3 = typesCards[1].querySelector('h3');
          if (typesH3) typesH3.innerHTML = `<span>${matchedService.typesTitle}</span><span class="text-xs text-brandBlue font-bold">All Makes</span>`;

          const typesUl = typesCards[1].querySelector('ul');
          if (typesUl && matchedService.types) {
            typesUl.innerHTML = matchedService.types.map(t => `
              <li class="flex items-center gap-3">
                <span class="w-2.5 h-2.5 rounded-full bg-brandBlue shrink-0"></span>
                <span>${t}</span>
              </li>
            `).join('');
          }
        }

        // Brands section heading
        const brandsH2 = document.querySelector('#brands h2');
        if (brandsH2) brandsH2.textContent = `${matchedService.titleName} BRANDS`;

        // Final CTA heading
        const finalH2 = document.querySelector('#final-cta h2');
        if (finalH2) finalH2.textContent = `BOOK YOUR ${matchedService.titleName} REPAIR TODAY`;

        // Dispatch CTA strip phone label
        const ctaStrip = document.querySelector('.bg-gradient-to-r span.font-heading');
        if (ctaStrip) ctaStrip.textContent = 'Call: 905-717-8905';

        // Modal appliance pre-select
        const modalAppliance = document.getElementById('modal-appliance');
        if (modalAppliance) modalAppliance.value = matchedService.name;
      }

      if (cityName) {
        const topAnnounce = document.querySelector('aside .font-medium');
        if (topAnnounce) {
          topAnnounce.textContent = `Same-Day ${matchedService ? matchedService.name : 'Appliance'} Repair Across ${cityName} & GTA`;
        }

        const modalCity = document.getElementById('modal-city');
        if (modalCity) {
          let found = false;
          for (let opt of modalCity.options) {
            if (opt.value.toLowerCase() === cityName.toLowerCase()) {
              opt.selected = true;
              found = true;
              break;
            }
          }
          if (!found) {
            const opt = document.createElement('option');
            opt.value = cityName;
            opt.textContent = cityName;
            opt.selected = true;
            modalCity.appendChild(opt);
          }
        }
      }
    }

    if (document.readyState === 'loading') {
      document.addEventListener('DOMContentLoaded', applyDynamicPersonalization);
    } else {
      applyDynamicPersonalization();
    }
  </script>
</body>
</html>
