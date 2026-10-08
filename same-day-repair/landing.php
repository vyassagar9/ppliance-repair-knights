<?php
/**
 * Appliance Repair Knights - High-Conversion Same-Day PPC Landing Page Template
 * Supports all 6 Appliances & GTA Cities via clean URL rewriting
 * Adheres strictly to AGENTS.md:
 * - No specific pricing/cost numbers (upfront written quotes, $0 diagnostic waived with repair)
 * - No specific warranty day/month/year numbers (comprehensive written parts and labour warranty)
 * - No hardcoded operational day counts (available daily for prompt dispatch)
 * - Isolated PPC page: noindex, follow
 */

$service_param = strtolower(trim($_GET['service'] ?? 'refrigerator'));
$city_param    = strtolower(trim($_GET['city'] ?? 'toronto'));

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
    'refrigerator' => [
        'name' => 'Refrigerator',
        'title' => 'Refrigerator',
        'badge' => 'SAME-DAY REFRIGERATOR REPAIR',
        'h1' => 'Same-Day Refrigerator Repair',
        'appliance_val' => 'Refrigerator / Freezer',
        'hero_img' => '../img/refrigerator-repair-service.webp',
        'desc' => "Is your refrigerator leaking, failing to cool, or making loud compressor noises? Our certified local appliance repair specialists in {$city_name} are dispatched daily with fully stocked vans to protect your groceries and restore peak cooling performance.",
        'pills' => [
            'Fridge Not Cooling / Warm',
            'Water Leaking on Floor',
            'Ice Maker Jammed / Broken',
            'Defrost / Heavy Frost Buildup',
            'Noisy Humming Compressor',
            '$0 Diagnostic With Repair'
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
            ['title' => 'FRENCH DOOR FRIDGE', 'img' => '../img/refrigerator-repair-service.webp', 'sub' => "{$hoods[1]} • Cooling restored"],
            ['title' => 'SIDE-BY-SIDE FRIDGE', 'img' => '../img/appliance-repair-technician-toronto.webp', 'sub' => "{$hoods[0]} • Ice maker fixed"],
            ['title' => 'BUILT-IN LUXURY FRIDGE', 'img' => '../img/appliance-repair-expert-technician.webp', 'sub' => "{$hoods[4]} • Inverter board serviced"],
            ['title' => 'BOTTOM-FREEZER FRIDGE', 'img' => '../img/refrigerator-repair-service.webp', 'sub' => "{$hoods[3]} • Defrost drain cleared"],
            ['title' => 'COMPACT BEVERAGE FRIDGE', 'img' => '../img/appliance-repair-technician-toronto.webp', 'sub' => "{$hoods[2]} • Fan motor replaced"]
        ],
        'faqs' => [
            [
                'q' => "How fast can a technician arrive for refrigerator repair in {$city_name}?",
                'a' => "We offer priority same-day emergency dispatch across {$city_name}. When you book online or call before 2:00 PM, our certified technician can typically arrive at your home within 2 to 4 hours with a fully stocked service vehicle."
            ],
            [
                'q' => "How does your diagnostic fee work?",
                'a' => "We believe in complete transparency. Our diagnostic service call fee is completely waived ($0 diagnostic fee) when you proceed with the authorized repair. You receive a firm, upfront written quote before any work begins, with zero hidden travel charges or surprise fees."
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
        'h1' => 'Same-Day Washing Machine Repair',
        'appliance_val' => 'Washing Machine',
        'hero_img' => '../img/washing-machine-repair-service.webp',
        'desc' => "Is your washing machine refusing to drain, failing to spin, vibrating violently, or leaking across the laundry floor? Our certified local technicians in {$city_name} arrive same-day with genuine factory parts to get your laundry running smoothly again.",
        'pills' => [
            'Washer Not Draining / Standing Water',
            "Drum Won't Spin or Agitate",
            'Water Leaking Underneath',
            'Violent Banging & Shaking',
            'Door Lock / Lid Jammed',
            '$0 Diagnostic With Repair'
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
                'badge' => 'DRAINAGE EMERGENCY'
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
            ['title' => 'FRONT-LOAD WASHER', 'img' => '../img/washing-machine-repair-service.webp', 'sub' => "{$hoods[0]} • Drum bearings & seal"],
            ['title' => 'TOP-LOAD WASHER', 'img' => '../img/washing-machine-repair-technician.webp', 'sub' => "{$hoods[1]} • Drain pump replaced"],
            ['title' => 'STACKED LAUNDRY UNIT', 'img' => '../img/washing-machine-repair-service.webp', 'sub' => "{$hoods[4]} • Suspension rods calibrated"],
            ['title' => 'SMART HE WASHER', 'img' => '../img/washing-machine-repair-technician.webp', 'sub' => "{$hoods[3]} • Control board restored"],
            ['title' => 'HIGH-EFFICIENCY WASHER', 'img' => '../img/washing-machine-repair-service.webp', 'sub' => "{$hoods[2]} • Inlet valve fixed"]
        ],
        'faqs' => [
            [
                'q' => "How fast can a technician arrive for washing machine repair in {$city_name}?",
                'a' => "We prioritize emergency laundry repairs across {$city_name}. When you book before 2:00 PM, a certified technician is dispatched same-day and typically arrives at your home within 2 to 4 hours with a fully stocked vehicle."
            ],
            [
                'q' => "Is the service call diagnostic fee included?",
                'a' => "Yes! When you choose to proceed with our recommended repair, your diagnostic service fee is 100% waived ($0 diagnostic). We provide a clear, upfront written quote before beginning any work."
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
        'h1' => 'Same-Day Dryer Repair',
        'appliance_val' => 'Dryer',
        'hero_img' => '../img/clothes-dryer-repair-service.webp',
        'desc' => "Is your dryer tumbling without heat, screeching loudly, or taking multiple cycles to dry clothes? Our certified technicians in {$city_name} arrive same-day with heating elements, thermal fuses, and roller assemblies.",
        'pills' => [
            'Dryer Not Heating Up / Cold Air',
            "Drum Won't Spin or Turn",
            'High-Pitched Squealing Noise',
            'Takes Multiple Cycles to Dry',
            'Overheating & Burning Smell',
            '$0 Diagnostic With Repair'
        ],
        'faults' => [
            [
                'title' => 'Dryer Not Heating / Cold Drum',
                'desc' => 'Burnt-out nichrome heating element coil, blown high-limit thermal fuse, or failed gas solenoid coils leaving clothes damp.',
                'badge' => 'NO HEAT EMERGENCY'
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
            ['title' => 'ELECTRIC DRYER', 'img' => '../img/clothes-dryer-repair-service.webp', 'sub' => "{$hoods[0]} • Heating element replaced"],
            ['title' => 'GAS CLOTHES DRYER', 'img' => '../img/dryer-repair-inspection.webp', 'sub' => "{$hoods[1]} • Gas valve coils restored"],
            ['title' => 'FRONT-CONTROL DRYER', 'img' => '../img/clothes-dryer-repair-service.webp', 'sub' => "{$hoods[4]} • Rollers & belt installed"],
            ['title' => 'SMART STEAM DRYER', 'img' => '../img/dryer-repair-inspection.webp', 'sub' => "{$hoods[3]} • Thermal cutoff fixed"],
            ['title' => 'COMPACT DRYER', 'img' => '../img/clothes-dryer-repair-service.webp', 'sub' => "{$hoods[2]} • Blower motor serviced"]
        ],
        'faqs' => [
            [
                'q' => "How fast can a technician fix my dryer in {$city_name}?",
                'a' => "We offer same-day dryer repair across {$city_name}. When you book before 2:00 PM, a certified technician arrives within 2 to 4 hours with common parts to restore heat and tumbling."
            ],
            [
                'q' => "How much is the diagnostic service call?",
                'a' => "Our diagnostic fee is completely waived ($0 diagnostic) when you authorize the repair. You get a transparent, upfront written quote before work begins."
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
        'h1' => 'Same-Day Dishwasher Repair',
        'appliance_val' => 'Dishwasher',
        'hero_img' => '../img/open-dishwasher-repair.webp',
        'desc' => "Is your dishwasher leaving gritty food residue, refusing to drain water, or leaking onto your kitchen floors? Our certified technicians in {$city_name} diagnose and repair wash pumps, inlet valves, and float switches on the same day.",
        'pills' => [
            'Dishwasher Not Draining / Standing Water',
            'Dishes Coming Out Dirty / Gritty',
            'Water Leaking from Underneath',
            'Not Filling with Hot Water',
            "Door Latch Won't Catch",
            '$0 Diagnostic With Repair'
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
            ['title' => 'BUILT-IN DISHWASHER', 'img' => '../img/open-dishwasher-repair.webp', 'sub' => "{$hoods[0]} • Drain pump replaced"],
            ['title' => 'PANEL-READY DISHWASHER', 'img' => '../img/open-dishwasher-repair.webp', 'sub' => "{$hoods[4]} • Wash motor replaced"],
            ['title' => 'FRONT-CONTROL DISHWASHER', 'img' => '../img/open-dishwasher-repair.webp', 'sub' => "{$hoods[1]} • Door gasket restored"],
            ['title' => 'SMART QUIET DISHWASHER', 'img' => '../img/open-dishwasher-repair.webp', 'sub' => "{$hoods[3]} • Inlet valve replaced"],
            ['title' => 'UNDER-COUNTER DISHWASHER', 'img' => '../img/open-dishwasher-repair.webp', 'sub' => "{$hoods[2]} • Float switch serviced"]
        ],
        'faqs' => [
            [
                'q' => "How quickly can you fix a leaking or non-draining dishwasher in {$city_name}?",
                'a' => "We prioritize dishwasher water leaks and standing water emergencies. Book before 2:00 PM and a certified technician will typically arrive within 2 to 4 hours anywhere in {$city_name}."
            ],
            [
                'q' => "Is the service call diagnostic fee waived?",
                'a' => "Yes! When you proceed with the repair, your diagnostic service call fee is completely waived ($0 diagnostic). You receive an upfront written quote before we start."
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
        'h1' => 'Same-Day Oven Repair',
        'appliance_val' => 'Oven / Range / Stove',
        'hero_img' => '../img/oven-dryer-repair-service.webp',
        'desc' => "Is your oven failing to reach set temperatures, burning food on one side, or showing digital error codes? Our certified cooking appliance specialists in {$city_name} arrive promptly with bake elements, igniters, and temperature sensors to restore your kitchen.",
        'pills' => [
            'Oven Not Heating Up',
            'Uneven Baking / Burning Food',
            'Bake / Broil Element Burned Out',
            "Gas Igniter Won't Light",
            'Oven Door Lock / Hinge Jammed',
            '$0 Diagnostic With Repair'
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
                'a' => "Our diagnostic service call fee is completely waived ($0 diagnostic) when you choose to proceed with the recommended repair. You receive a firm upfront written quote before work begins."
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
        'h1' => 'Same-Day Stove & Cooktop Repair',
        'appliance_val' => 'Oven / Range / Stove',
        'hero_img' => '../img/induction-cooktop-repair-service.webp',
        'desc' => "Is your electric cooktop element dead, induction surface flashing error codes, or gas burner continuously clicking? Our certified technicians in {$city_name} repair glass tops, spark modules, and infinite control switches on the very same day.",
        'pills' => [
            'Electric Burner Not Heating',
            "Gas Burner Won't Spark",
            'Continuous Igniter Clicking',
            'Touch Controls Unresponsive',
            'Hot Surface Indicator Stuck On',
            '$0 Diagnostic With Repair'
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
                'a' => "Your diagnostic service call fee is completely waived ($0 diagnostic) when you choose to proceed with our authorized repair. We provide an upfront, transparent written quote before any work begins."
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
    ]
];

// Fallback to refrigerator if unknown service
$srv = $services_data[$service_param] ?? $services_data['refrigerator'];
$service_slug = $service_param;
$page_identifier = "{$service_slug}-{$city_slug}";

// Page Metadata
$page_title = "Same-Day {$srv['name']} Repair in {$city_name} | Local Certified Technicians";
$meta_desc  = "Need fast {$srv['name']} repair in {$city_name}? Licensed technicians fix all issues today. $0 diagnostic with repair. Genuine factory parts & written warranty.";
$canonical_url = "https://www.appliancerepairknights.com/same-day-repair/{$page_identifier}";
?>
<!DOCTYPE html>
<html lang="en-CA" class="scroll-smooth">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Preconnect & DNS-Prefetch for High-Priority External Assets -->
  <link rel="preconnect" href="https://www.googletagmanager.com" crossorigin>
  <link rel="dns-prefetch" href="https://www.googletagmanager.com">

  <!-- Google Tag Manager (Mobile-First Smart Deferred Loading - 100/100 Speed & Zero Tracking Loss) -->
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
    // Mobile-First: Load immediately on first touch/interaction or idle timeout
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

  <!-- Primary Meta Tags for Google PPC & SEO -->
  <title id="page-title"><?php echo htmlspecialchars($page_title); ?></title>
  <meta id="meta-title" name="title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta id="meta-desc" name="description" content="<?php echo htmlspecialchars($meta_desc); ?>">
  <meta name="keywords" content="<?php echo htmlspecialchars(strtolower($srv['name']) . ' repair ' . $city_name . ', ' . strtolower($srv['title']) . ' repair ' . $city_name . ', emergency appliance repair ' . $city_name); ?>">
  <meta name="robots" content="noindex, follow"> <!-- PPC Landing Page best practice: focus ad budget -->
  <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">

  <!-- Favicons -->
  <link rel="icon" type="image/x-icon" href="../img/favicon.ico">
  <link rel="icon" type="image/png" sizes="32x32" href="../img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../img/favicon-16x16.png">
  <link rel="apple-touch-icon" sizes="180x180" href="../img/apple-touch-icon.png">
  <link rel="manifest" href="../img/site.webmanifest">

  <!-- Preload Critical LCP Assets (Header Logo WebP + Main Heading Font) -->
  <link rel="preload" as="image" href="../img/logo.webp" type="image/webp" fetchpriority="high">
  <link rel="preload" href="../fonts/montserrat-latin.woff2" as="font" type="font/woff2" crossorigin>

  <!-- Production Local Compiled Tailwind CSS & Global Stylesheet -->
  <link rel="stylesheet" href="../css/tailwind.min.css">
  <link rel="stylesheet" href="../css/style.min.css">

  <style>
    /* Local Self-Hosted Webfonts (Instant & Privacy-Friendly) */
    @font-face {
      font-family: 'Inter';
      font-style: normal;
      font-weight: 100 900;
      font-display: swap;
      src: url('../fonts/inter-latin.woff2') format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    @font-face {
      font-family: 'Montserrat';
      font-style: normal;
      font-weight: 100 900;
      font-display: swap;
      src: url('../fonts/montserrat-latin.woff2') format('woff2');
      unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+0304, U+0308, U+0329, U+2000-206F, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
    }

    h1,
    h2,
    h3,
    .font-heading {
      font-family: 'Montserrat', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    }

    html {
      scroll-behavior: smooth
    }

    .pulse-ring {
      animation: pulse-border 2s infinite
    }

    @keyframes pulse-border {
      0% {
        box-shadow: 0 0 0 0 rgba(255, 107, 0, .4)
      }

      70% {
        box-shadow: 0 0 0 12px rgba(255, 107, 0, 0)
      }

      100% {
        box-shadow: 0 0 0 0 rgba(255, 107, 0, 0)
      }
    }

    .hover-lift {
      transition: transform .25s ease, box-shadow .25s ease
    }

    .hover-lift:hover {
      transform: translateY(-4px);
      box-shadow: 0 12px 24px -6px rgba(15, 76, 129, .15)
    }

    @keyframes marquee {
      0% {
        transform: translateX(0%)
      }

      100% {
        transform: translateX(-50%)
      }
    }

    .animate-marquee {
      display: flex;
      width: max-content;
      animation: marquee 25s linear infinite
    }

    .animate-marquee:hover {
      animation-play-state: paused
    }

    @keyframes reviewScroll {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(-50%);
      }
    }

    .reviews-auto-scroll {
      display: flex;
      width: max-content;
      animation: reviewScroll 24s linear infinite;
    }

    .reviews-auto-scroll:hover {
      animation-play-state: paused;
    }

    /* Custom smooth scroll bar for mobile touch */
    .no-scrollbar::-webkit-scrollbar {
      display: none;
    }

    .no-scrollbar {
      -ms-overflow-style: none;
      scrollbar-width: none;
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
        "hasMap": "https://www.google.com/maps/place/Appliance+Repair+Knights+Ltd./@43.7836619,-79.5314951,9z/data=!3m1!4b1!4m6!3m5!1s0xe5ee0ed024e04c1:0x1cd11e5ae2d44b97!8m2!3d43.7836619!4d-79.5314952!16s%2Fg%2F11z82qh059",
        "sameAs": [
          "https://www.facebook.com/Appliancerepairknights",
          "https://www.instagram.com/appliancerepairknights/",
          "https://www.google.com/maps/place/Appliance+Repair+Knights+Ltd./@43.7836619,-79.5314951,9z/data=!3m1!4b1!4m6!3m5!1s0xe5ee0ed024e04c1:0x1cd11e5ae2d44b97!8m2!3d43.7836619!4d-79.5314952!16s%2Fg%2F11z82qh059"
        ],
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "100 King St W",
          "addressLocality": "Toronto",
          "addressRegion": "ON",
          "postalCode": "M5X 1A9",
          "addressCountry": "CA"
        },
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": 43.6487,
          "longitude": -79.3817
        },
        "aggregateRating": {
          "@type": "AggregateRating",
          "ratingValue": "5.0",
          "reviewCount": "12"
        },
        "openingHoursSpecification": {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
          "opens": "08:00",
          "closes": "20:00"
        },
        "areaServed": [
          "Toronto", "Mississauga", "Brampton", "Milton", "Oakville", "Burlington", "Hamilton",
          "Kitchener", "Waterloo", "Cambridge", "Guelph", "Oshawa", "Ajax", "Pickering", "Barrie"
        ]
      },
      {
        "@type": "FAQPage",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "How quickly can a technician arrive at my home?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We offer same-day service across Toronto and the GTA! When you call or submit an enquiry before 2:00 PM, our technician can be at your home within 2 to 4 hours."
            }
          },
          {
            "@type": "Question",
            "name": "What is your pricing model and service call fee?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We provide transparent upfront flat-rate pricing with zero hidden fees. The diagnostic service call fee is 100% FREE when you proceed with any appliance repair."
            }
          },
          {
            "@type": "Question",
            "name": "What warranty do you offer on repairs?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "All repairs performed by Appliance Repair Knights come with a comprehensive written warranty covering both genuine factory replacement parts and technician labor."
            }
          },
          {
            "@type": "Question",
            "name": "Do you carry replacement parts in your service vehicles?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes! Our service vans are fully stocked with common brand-compatible, high-grade replacement parts for Bosch, GE Appliances, KitchenAid, Frigidaire, Maytag, Sub-Zero, Miele and Samsung appliances to complete 85%+ of repairs on the spot."
            }
          }
        ]
      }
    ]
  }
  </script>
</head>

<body class="bg-white text-slate-800 font-sans antialiased selection:bg-brandOrange selection:text-white pb-20 md:pb-0">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M7B6FLPR" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- TOP DISPATCH EMERGENCY ANNOUNCEMENT BAR (HIDDEN ON MOBILE FOR PPC CONVERSION SPACE) -->
  <div class="hidden sm:block bg-brandDarkBlue text-white text-xs py-2.5 px-4 border-b border-brandBlue/30">
    <div class="max-w-7xl mx-auto flex flex-wrap justify-between items-center gap-2">
      <div class="flex items-center gap-2 font-medium">
        <span class="inline-block w-2.5 h-2.5 rounded-full bg-emerald-400 animate-ping"></span>
        <span id="top-announcement" class="text-slate-100 font-medium">Daily Emergency <?php echo htmlspecialchars($srv['name']); ?> Repair Dispatch Active in <?php echo htmlspecialchars($city_name); ?> &amp; GTA</span>
      </div>
      <div class="flex items-center gap-4 text-xs font-extrabold text-amber-400">
        <span>Toronto Technicians On Standby</span>
        <a href="tel:9057178905" onclick="trackGtmCall('topbar')"
          class="gtm-ppc-call gtm-ppc-call-topbar hover:underline text-white hidden sm:inline font-bold">Call:
          905-717-8905</a>
      </div>
    </div>
  </div>

  <!-- PPC CONVERSION HEADER WITH MOBILE MENU & IMPROVED CTAS -->
  <header class="sticky top-0 z-50 bg-white/95 backdrop-blur-md border-b border-brandBorder shadow-sm">
    <div class="max-w-7xl mx-auto px-4 h-20 flex justify-between items-center">

      <!-- Brand Logo -->
      <a href="#" onclick="window.scrollTo({top: 0, behavior: 'smooth'}); return false;"
        class="flex items-center gap-2 focus:outline-none flex-shrink-0" aria-label="Appliance Repair Knights">
        <picture>
          <source srcset="../img/logo.webp" type="image/webp">
          <img src="../img/logo-opt.png" alt="Appliance Repair Knights Logo" width="220" height="64"
            class="h-14 sm:h-16 w-auto object-contain" fetchpriority="high">
        </picture>
      </a>

      <!-- Header CTAs (Clean menu-free header) -->
      <div class="flex items-center gap-2 sm:gap-3">

        <!-- Phone Call Button CTA -->
        <a href="tel:9057178905" onclick="trackGtmCall('header')"
          class="gtm-ppc-call gtm-ppc-call-header bg-brandDarkBlue hover:bg-brandNavy text-white font-black px-3.5 py-2.5 sm:px-6 sm:py-3 rounded-xl text-xs sm:text-base transition-all flex items-center gap-2 shadow-md">
          <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
            <path
              d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
            </path>
          </svg>
          <span class="hidden sm:inline">CALL:</span> <span>905-717-8905</span>
        </a>

        <!-- WhatsApp Header CTA (Hidden on desktop) -->
        <a id="whatsapp-header-btn"
          href="https://wa.me/19057178905?text=Hi%2C%20I%20need%20same-day%20refrigerator%20repair%20in%20Toronto"
          onclick="trackGtmWhatsApp('header')" target="_blank" rel="noopener" aria-label="Chat on WhatsApp"
          class="gtm-ppc-whatsapp-header flex sm:hidden bg-emerald-600 hover:bg-emerald-700 text-white p-2.5 rounded-xl text-xs font-extrabold items-center justify-center gap-1.5 shadow-md transition-all">
          <svg class="w-4 h-4 fill-current flex-shrink-0" viewBox="0 0 24 24">
            <path
              d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
          </svg>
        </a>

        <!-- Fast Service Booking CTA -->
        <a href="#ppc-quote-form"
          class="gtm-ppc-lead-header hidden sm:flex bg-brandOrange hover:bg-brandOrangeHover text-white font-extrabold px-3.5 py-2 sm:px-5 sm:py-2.5 rounded-xl text-xs sm:text-sm transition-all shadow-lg uppercase tracking-wider items-center gap-1.5 pulse-ring">
          <span>CHECK AVAILABILITY</span>
        </a>

      </div>

    </div>
  </header>

  <main>

    <!-- HERO SECTION 1 (HIGH CONVERSION PPC HERO + LEAD CAPTURE FORM) -->
    <section
      class="bg-gradient-to-b from-slate-50 via-white to-slate-100 py-8 lg:py-14 border-b border-brandBorder relative overflow-hidden">
      <div class="max-w-7xl mx-auto px-4">

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

          <!-- Hero Left Column: Aggressive PPC Value Props (7 cols) -->
          <div class="lg:col-span-7 space-y-5">

            <div id="hero-badge"
              class="inline-flex items-center gap-2 bg-brandOrange/10 text-brandOrange font-extrabold text-xs uppercase tracking-widest px-3.5 py-1.5 rounded-md border border-brandOrange/30">
              <span class="w-2 h-2 rounded-full bg-brandOrange animate-pulse"></span>
              <span>SAME-DAY <?php echo htmlspecialchars(strtoupper($srv['name'])); ?> REPAIR • <?php echo htmlspecialchars(strtoupper($city_name)); ?> SPECIALISTS</span>
            </div>

            <h1 id="hero-title"
              class="text-3xl sm:text-4xl lg:text-5xl font-heading font-black text-brandDarkBlue tracking-tight leading-tight">
              Same-Day <span class="text-brandBlue"><?php echo htmlspecialchars($srv['name']); ?> Repair</span> in <?php echo htmlspecialchars($city_name); ?>
            </h1>

            <p id="hero-desc" class="text-slate-700 text-sm sm:text-base md:text-lg leading-relaxed">
              <?php echo htmlspecialchars($srv['desc']); ?>
            </p>

            <!-- Common Issues Solved Pills (Dynamic for 100% Instant Relevance) -->
            <div id="hero-issues-container" class="pt-1 pb-1">
              <span class="text-xs font-black uppercase tracking-wider text-brandDarkBlue block mb-2">Common <?php echo htmlspecialchars($srv['name']); ?> Problems We Fix Today:</span>
              <div id="hero-issues-list" class="flex flex-wrap gap-2">
                <div class="inline-flex items-center gap-1.5 bg-emerald-600 text-white border border-emerald-700 px-2.5 py-1 rounded-lg text-xs font-black shadow-xs">
                  <svg class="w-3.5 h-3.5 text-emerald-200 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                  <span>$0 Service Call With Any Repair</span>
                </div>
                <?php foreach (array_slice($srv['pills'], 0, 5) as $pill): ?>
                <div class="inline-flex items-center gap-1.5 bg-white border border-brandOrange/30 text-brandDarkBlue px-2.5 py-1 rounded-lg text-xs font-bold shadow-2xs">
                  <svg class="w-3.5 h-3.5 text-brandOrange flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                  <span><?php echo htmlspecialchars($pill); ?></span>
                </div>
                <?php endforeach; ?>
              </div>
            </div>

            <!-- Key PPC Value Cards (3 Core Benefits) -->
            <div id="hero-ppc-benefits" class="grid grid-cols-1 sm:grid-cols-3 gap-3 pt-1">

              <div class="bg-white p-3.5 rounded-xl border border-slate-200 shadow-xs flex items-center gap-3">
                <div
                  class="w-10 h-10 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center flex-shrink-0 font-bold">
                  $0
                </div>
                <div>
                  <h3 class="text-xs font-bold text-slate-800 leading-tight">Free Diagnostic</h3>
                  <span class="text-[11px] text-slate-600 font-medium">With Any Paid Repair</span>
                </div>
              </div>

              <div class="bg-white p-3.5 rounded-xl border border-slate-200 shadow-xs flex items-center gap-3">
                <div
                  class="w-10 h-10 rounded-lg bg-brandBlue/10 text-brandBlue flex items-center justify-center flex-shrink-0 font-bold">
                  <svg class="w-5 h-5 text-brandBlue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="text-xs font-bold text-slate-800 leading-tight">Upfront Written Quote</h3>
                  <span class="text-[11px] text-slate-600 font-medium">No Hidden Charges</span>
                </div>
              </div>

              <div class="bg-white p-3.5 rounded-xl border border-slate-200 shadow-xs flex items-center gap-3">
                <div
                  class="w-10 h-10 rounded-lg bg-amber-100 text-amber-700 flex items-center justify-center flex-shrink-0 font-bold">
                  <svg class="w-5 h-5 text-amber-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                  </svg>
                </div>
                <div>
                  <h3 class="text-xs font-bold text-slate-800 leading-tight">Same-Day Arrival</h3>
                  <span class="text-[11px] text-slate-600 font-medium">Across Toronto &amp; GTA</span>
                </div>
              </div>

            </div>

            <!-- 3 Trust Badge Cards (Factory Trained, Google Trust Reviews, Written Warranty) -->
            <div class="grid grid-cols-3 gap-2 sm:gap-3 pt-1">

              <div
                class="bg-white p-2.5 sm:p-3 rounded-xl border border-slate-200 shadow-xs flex flex-col items-center text-center">
                <div
                  class="w-8 h-8 sm:w-10 sm:h-10 rounded-lg bg-brandBlue/10 text-brandBlue flex items-center justify-center flex-shrink-0 mb-1.5 sm:mb-2">
                  <svg class="w-4 h-4 sm:w-5 sm:h-5 text-brandBlue" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 001.946.806 3.42 3.42 0 014.438 0 3.42 3.42 0 00.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                    </path>
                  </svg>
                </div>
                <div>
                  <h3 class="text-xs sm:text-[13px] font-bold text-brandDarkBlue leading-tight">Factory Trained</h3>
                  <span
                    class="text-[10px] sm:text-[11px] text-slate-600 font-medium block leading-tight mt-0.5">Fridge Specialists</span>
                </div>
              </div>

              <!-- Google Trust Reviews Badge (No external link) -->
              <div
                class="bg-white p-2.5 sm:p-3 rounded-xl border border-slate-200 shadow-xs flex flex-col items-center text-center">
                <div
                  class="w-8 h-8 sm:w-10 sm:h-10 rounded-lg bg-slate-50 border border-slate-200 flex items-center justify-center flex-shrink-0 mb-1.5 sm:mb-2 p-1.5 sm:p-2">
                  <svg class="w-4 h-4 sm:w-5 sm:h-5" viewBox="0 0 24 24">
                    <path fill="#4285F4"
                      d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z" />
                    <path fill="#34A853"
                      d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.13C3.26 21.37 7.34 24 12 24z" />
                    <path fill="#FBBC05"
                      d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.25C.45 8.18 0 9.98 0 12s.45 3.82 1.25 5.42l4.03-3.13z" />
                    <path fill="#EA4335"
                      d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.34 0 3.26 2.63 1.25 6.58l4.03 3.13c.95-2.83 3.6-4.96 6.72-4.96z" />
                  </svg>
                </div>
                <div>
                  <h3
                    class="text-xs sm:text-[13px] font-bold text-brandDarkBlue leading-tight flex items-center justify-center gap-1">
                    <span>Google Reviews</span>
                  </h3>
                  <span class="inline-flex items-center text-[10px] sm:text-[11px] text-amber-600 font-extrabold leading-tight mt-0.5"><svg class="w-3 h-3 text-amber-500 fill-current inline mr-1 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>5.0 Verified Rating</span>
                </div>
              </div>

              <div
                class="bg-white p-2.5 sm:p-3 rounded-xl border border-slate-200 shadow-xs flex flex-col items-center text-center">
                <div
                  class="w-8 h-8 sm:w-10 sm:h-10 rounded-lg bg-emerald-100 text-emerald-700 flex items-center justify-center flex-shrink-0 mb-1.5 sm:mb-2">
                  <svg class="w-4 h-4 sm:w-5 sm:h-5 text-emerald-700" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
                    </path>
                  </svg>
                </div>
                <div>
                  <h3 class="text-xs sm:text-[13px] font-bold text-brandDarkBlue leading-tight">Written Warranty</h3>
                  <span class="text-[10px] sm:text-[11px] text-slate-600 font-medium block leading-tight mt-0.5">Parts &amp; Labour</span>
                </div>
              </div>

            </div>

            <!-- Urgent Call CTA Row -->
            <div class="flex flex-wrap items-center gap-4 pt-2">
              <a href="tel:9057178905" onclick="trackGtmCall('hero')"
                class="gtm-ppc-call gtm-ppc-call-hero bg-brandOrange hover:bg-brandOrangeHover text-white font-extrabold px-7 py-3.5 rounded-xl text-base transition-all shadow-lg flex items-center gap-2 uppercase tracking-wide">
                <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                  <path
                    d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                  </path>
                </svg>
                CALL 905-717-8905 NOW
              </a>
              <span class="text-xs text-slate-600 font-bold">Or fill out quick form for immediate dispatch</span>
            </div>

          </div>

          <!-- Hero Right Column: PPC HIGH-CONVERTING LEAD CAPTURE FORM (5 cols) -->
          <div id="ppc-quote-form" class="lg:col-span-5">
            <div class="bg-white rounded-3xl p-6 sm:p-7 shadow-2xl border-2 border-brandBlue/20 relative">

              <div id="form-badge"
                class="bg-brandBlue text-white text-xs font-black uppercase tracking-widest py-1.5 px-3 rounded-full inline-block mb-3">
                SAME-DAY <?php echo htmlspecialchars(strtoupper($city_name)); ?> <?php echo htmlspecialchars(strtoupper($srv['name'])); ?> DISPATCH
              </div>

              <h2 id="form-title" class="text-2xl font-heading font-black text-brandDarkBlue mb-1">
                Request <?php echo htmlspecialchars($srv['name']); ?> Repair in <?php echo htmlspecialchars($city_name); ?> &amp; Claim Your $0 Diagnostic
              </h2>
              <p id="form-subtitle" class="text-slate-600 text-xs mb-4 font-medium">
                Tell us what's broken. A local technician will call in <strong class="text-slate-900">&lt;15 mins</strong> with upfront pricing &amp; arrival time.
              </p>

              <form id="ppc-lead-form" class="gtm-ppc-form-submit space-y-3"
                onsubmit="event.preventDefault(); handlePPCFormSubmit();">

                <div>
                  <input type="text" id="ppc-name" required placeholder="Full Name *" aria-label="Full Name"
                    class="w-full px-4 py-3 sm:py-3.5 rounded-xl border border-slate-300 text-slate-800 text-sm focus:ring-2 focus:ring-brandOrange focus:border-brandOrange outline-none transition-all placeholder:text-slate-400 font-medium">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                  <div>
                    <input type="tel" id="ppc-phone" required placeholder="Phone Number *" aria-label="Phone Number"
                      class="w-full px-4 py-3 sm:py-3.5 rounded-xl border border-slate-300 text-slate-800 text-sm focus:ring-2 focus:ring-brandOrange focus:border-brandOrange outline-none transition-all placeholder:text-slate-400 font-medium">
                  </div>
                  <div>
                    <input type="email" id="ppc-email" placeholder="Email Address (Optional)" aria-label="Email Address"
                      class="w-full px-4 py-3 sm:py-3.5 rounded-xl border border-slate-300 text-slate-800 text-sm focus:ring-2 focus:ring-brandOrange focus:border-brandOrange outline-none transition-all placeholder:text-slate-400 font-medium">
                  </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                  <div>
                    <select id="ppc-city" required aria-label="Select City or Area"
                      class="w-full px-4 py-3 sm:py-3.5 rounded-xl border border-slate-300 text-slate-800 text-sm focus:ring-2 focus:ring-brandOrange focus:border-brandOrange outline-none transition-all bg-white font-medium cursor-pointer">
                      <option value="Toronto" selected>Toronto (All Areas)</option>
                      <option value="North York">North York</option>
                      <option value="Downtown Toronto">Downtown Toronto</option>
                      <option value="Scarborough">Scarborough</option>
                      <option value="Etobicoke">Etobicoke</option>
                      <option value="Midtown / East York">Midtown / East York</option>
                      <option value="Mississauga">Mississauga</option>
                      <option value="Brampton">Brampton</option>
                      <option value="Vaughan">Vaughan</option>
                      <option value="Markham">Markham</option>
                      <option value="Oakville">Oakville</option>
                    </select>
                  </div>
                  <div>
                    <select id="ppc-appliance" required aria-label="Select Refrigerator Type or Issue"
                      class="w-full px-4 py-3 sm:py-3.5 rounded-xl border border-slate-300 text-slate-800 text-sm focus:ring-2 focus:ring-brandOrange focus:border-brandOrange outline-none transition-all bg-white font-medium cursor-pointer">
                      <option value="Refrigerator" selected>Refrigerator / Freezer</option>
                      <option value="French Door Refrigerator">French Door Refrigerator</option>
                      <option value="Side-by-Side Refrigerator">Side-by-Side Refrigerator</option>
                      <option value="Built-In / Sub-Zero Fridge">Built-In / Sub-Zero Fridge</option>
                      <option value="Bottom Freezer Refrigerator">Bottom Freezer Refrigerator</option>
                      <option value="Wine Cooler / Beverage Fridge">Wine Cooler / Beverage Fridge</option>
                    </select>
                  </div>
                </div>

                <button type="submit"
                  class="gtm-ppc-btn-submit w-full bg-brandOrange hover:bg-brandOrangeHover text-white font-extrabold py-3.5 px-6 rounded-xl text-xs sm:text-sm shadow-lg transition-all flex items-center justify-center gap-2 uppercase tracking-wider cursor-pointer mt-2 active:scale-98">
                  <span>CHECK AVAILABILITY &amp; LOCK $0 FEE →</span>
                </button>

                <p class="text-[11px] text-center text-slate-500 font-medium mt-2 flex items-center justify-center gap-1.5">
                  <svg class="w-3.5 h-3.5 text-slate-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span>100% Privacy Protected • $0 Diagnostic Fee Waived With Repair</span>
                </p>
                <p class="text-[10px] text-center text-slate-400 mt-1 leading-tight">
                  Your information is secure and used solely for dispatching your technician. See our <a href="../privacy-policy" target="_blank" class="text-brandBlue font-semibold underline hover:text-brandOrange">Privacy Policy</a>.
                </p>
              </form>

              <!-- PPC Form Confirmation View (Shown on Submit) -->
              <div id="ppc-success"
                class="hidden bg-emerald-50 border-2 border-emerald-500 rounded-2xl p-6 text-center space-y-3 mt-4">
                <div class="w-12 h-12 rounded-full bg-emerald-500 text-white flex items-center justify-center mx-auto">
                  <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                  </svg>
                </div>
                <h3 class="text-xl font-heading font-bold text-emerald-900">Request Received!</h3>
                <p class="text-xs text-emerald-900 font-medium">
                  Thank you! A technician assigned to your area will call <strong><span id="display-user-phone">your
                      phone</span></strong> within <strong>15 minutes</strong>.
                </p>
                <a href="tel:9057178905" onclick="trackGtmCall('success_box')"
                  class="gtm-ppc-call gtm-ppc-call-success inline-block bg-brandDarkBlue text-white text-xs font-bold py-2 px-4 rounded-lg mt-2">Call
                  Dispatch Directly: 905-717-8905</a>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section>

    <!-- SECTION 5: INFINITE MARQUEE BRAND SLIDER -->
    <section class="py-12 bg-white border-b border-brandBorder overflow-hidden">
      <div class="max-w-7xl mx-auto px-4 mb-8 text-center">
        <div
          class="inline-flex items-center gap-1.5 bg-brandBlue/10 text-brandBlue font-extrabold text-[11px] uppercase tracking-wider px-3.5 py-1.5 rounded-full mb-2.5">
          <svg class="w-3.5 h-3.5 text-brandBlue flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
          <span>ALL MAJOR BRANDS SERVICED WITH GENUINE FACTORY PARTS</span>
        </div>
        <h2 class="text-2xl sm:text-3xl font-heading font-black text-brandDarkBlue uppercase tracking-tight mb-2">WE SERVICE YOUR BRAND WITH GENUINE FACTORY PARTS</h2>
        <p class="text-slate-700 text-xs sm:text-sm max-w-xl mx-auto mb-4 leading-relaxed font-medium">
          Samsung, LG, Whirlpool, Bosch, Sub-Zero, and more — our certified technicians carry original factory parts for same-day repairs.
        </p>
        <div class="w-20 h-1 bg-brandOrange mx-auto rounded-full"></div>
      </div>

      <!-- Infinite Brand Scroller with Authentic Brand Colors & Edge Fade -->
      <div class="relative w-full overflow-hidden flex items-center py-2 mb-8">
        <!-- Edge Fades for Seamless Infinite Flow -->
        <div class="absolute left-0 top-0 bottom-0 w-12 sm:w-24 bg-gradient-to-r from-white via-white/80 to-transparent z-10 pointer-events-none"></div>
        <div class="absolute right-0 top-0 bottom-0 w-12 sm:w-24 bg-gradient-to-l from-white via-white/80 to-transparent z-10 pointer-events-none"></div>

        <div class="animate-marquee flex items-center gap-3 sm:gap-4 py-2">

          <!-- Brand 1: Samsung (#034EA2) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #034EA2;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #034EA2;">SAMSUNG</span>
          </div>

          <!-- Brand 2: LG (#A50034) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #A50034;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #A50034;">LG</span>
          </div>

          <!-- Brand 3: Whirlpool (#004B87) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #004B87;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #004B87;">WHIRLPOOL</span>
          </div>

          <!-- Brand 4: Bosch (#EA1B23) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #EA1B23;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #EA1B23;">BOSCH</span>
          </div>

          <!-- Brand 5: GE Appliances (#002D62) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #002D62;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #002D62;">GE APPLIANCES</span>
          </div>

          <!-- Brand 6: KitchenAid (#BE1E2D) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #BE1E2D;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #BE1E2D;">KITCHENAID</span>
          </div>

          <!-- Brand 7: Maytag (#0C2340) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #0C2340;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #0C2340;">MAYTAG</span>
          </div>

          <!-- Brand 8: Frigidaire (#003366) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #003366;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #003366;">FRIGIDAIRE</span>
          </div>

          <!-- Brand 9: Sub-Zero (#1A1A1A / Red #E52427) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #E52427;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #1A1A1A;">SUB-ZERO</span>
          </div>

          <!-- Brand 10: Miele (#D40026) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #D40026;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #D40026;">MIELE</span>
          </div>

          <!-- Brand 11: Thermador (#0F2C59) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #0F2C59;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #0F2C59;">THERMADOR</span>
          </div>

          <!-- Brand 12: Viking (#8B0000) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #8B0000;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #8B0000;">VIKING</span>
          </div>

          <!-- REPEAT FOR SEAMLESS INFINITE LOOP -->

          <!-- Brand 1: Samsung (#034EA2) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #034EA2;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #034EA2;">SAMSUNG</span>
          </div>

          <!-- Brand 2: LG (#A50034) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #A50034;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #A50034;">LG</span>
          </div>

          <!-- Brand 3: Whirlpool (#004B87) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #004B87;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #004B87;">WHIRLPOOL</span>
          </div>

          <!-- Brand 4: Bosch (#EA1B23) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #EA1B23;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #EA1B23;">BOSCH</span>
          </div>

          <!-- Brand 5: GE Appliances (#002D62) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #002D62;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #002D62;">GE APPLIANCES</span>
          </div>

          <!-- Brand 6: KitchenAid (#BE1E2D) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #BE1E2D;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #BE1E2D;">KITCHENAID</span>
          </div>

          <!-- Brand 7: Maytag (#0C2340) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #0C2340;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #0C2340;">MAYTAG</span>
          </div>

          <!-- Brand 8: Frigidaire (#003366) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #003366;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #003366;">FRIGIDAIRE</span>
          </div>

          <!-- Brand 9: Sub-Zero (#1A1A1A / Red #E52427) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #E52427;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #1A1A1A;">SUB-ZERO</span>
          </div>

          <!-- Brand 10: Miele (#D40026) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #D40026;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #D40026;">MIELE</span>
          </div>

          <!-- Brand 11: Thermador (#0F2C59) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #0F2C59;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #0F2C59;">THERMADOR</span>
          </div>

          <!-- Brand 12: Viking (#8B0000) -->
          <div class="inline-flex items-center gap-2.5 bg-white px-4 sm:px-5 py-2.5 rounded-2xl border border-slate-200/90 shadow-2xs hover:shadow-md transition-all duration-300 hover:scale-105 whitespace-nowrap">
            <span class="w-2.5 h-2.5 rounded-full shrink-0" style="background-color: #8B0000;"></span>
            <span class="font-heading font-black text-sm sm:text-base tracking-wider" style="color: #8B0000;">VIKING</span>
          </div>

        </div>
      </div>

      <div class="text-center px-4 mt-3">
        <div
          class="inline-flex items-center gap-2 bg-slate-100 px-4 py-2 rounded-full border border-slate-200 text-xs text-slate-700 font-medium">
          <span class="text-brandOrange font-bold">Fast Local Dispatch:</span>
          <span>Our mobile vans carry certified factory replacement parts for all residential makes &amp; models across <?php echo htmlspecialchars($city_name); ?> &amp; GTA.</span>
        </div>
      </div>
    </section>

    <!-- SECTION 2: COMMON REFRIGERATOR FAULTS WE FIX IN TORONTO (6 CARDS WITH DECISION GUIDANCE) -->
    <section class="py-14 bg-white border-b border-brandBorder" id="services">
      <div class="max-w-7xl mx-auto px-4 text-center">

        <div
          class="inline-flex items-center gap-1.5 text-brandOrange font-extrabold text-xs uppercase tracking-widest mb-2.5">
          <svg class="w-4 h-4 text-brandOrange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
              d="M14.7 6.3a1 1 0 000 1.4l1.6 1.6a1 1 0 001.4 0l3.77-3.77a6 6 0 01-7.94 7.94l-6.91 6.91a2.12 2.12 0 01-3-3l6.91-6.91a6 6 0 017.94-7.94l-3.76 3.76z">
            </path>
          </svg>
          <span>SAME-DAY <?php echo htmlspecialchars(strtoupper($city_name)); ?> <?php echo htmlspecialchars(strtoupper($srv['name'])); ?> DIAGNOSTICS</span>
        </div>
        <h2 id="services-title"
          class="text-2xl sm:text-3xl font-heading font-black text-brandDarkBlue uppercase tracking-tight mb-2">
          WHAT'S WRONG WITH YOUR <?php echo htmlspecialchars(strtoupper($srv['name'])); ?>?
        </h2>
        <p id="services-subtitle"
          class="text-slate-700 text-xs sm:text-sm max-w-xl mx-auto mb-4 font-medium leading-relaxed">
          Identify your symptom below. Our local technicians arrive with specialized diagnostic tools and genuine factory parts to fix it today.
        </p>
        <div class="w-20 h-1 bg-brandOrange mx-auto mb-8 rounded-full"></div>

        <div id="services-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-6 text-left">
          <?php foreach ($srv['faults'] as $idx => $fault): ?>
          <div class="bg-slate-50 hover:bg-white p-5 rounded-2xl border border-slate-200 shadow-xs hover-lift flex flex-col justify-between transition-all">
            <div>
              <div class="flex items-center justify-between mb-3">
                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-[10px] font-black uppercase tracking-wider bg-rose-50 text-rose-700 border border-rose-200">
                  <span class="w-1.5 h-1.5 rounded-full bg-rose-500 animate-pulse"></span>
                  <?php echo htmlspecialchars($fault['badge']); ?>
                </span>
                <span class="text-xs font-black text-slate-400 tracking-wider">#0<?php echo $idx + 1; ?></span>
              </div>
              <h3 class="font-heading font-black text-brandDarkBlue text-sm sm:text-base leading-tight mb-2">
                <?php echo htmlspecialchars($fault['title']); ?>
              </h3>
              <p class="text-xs text-slate-600 leading-relaxed font-medium mb-3">
                <?php echo htmlspecialchars($fault['desc']); ?>
              </p>
            </div>
            <a href="#ppc-quote-form" class="inline-flex items-center gap-1 text-xs text-brandOrange font-extrabold hover:underline">
              <span>Fix This Issue Today</span>
              <span>&rarr;</span>
            </a>
          </div>
          <?php endforeach; ?>
        </div>

      </div>
    </section>

    <!-- CALL CTA STRIP (POST-APPLIANCE SELECTION DISPATCH BANNER) -->
    <section class="py-6 sm:py-8 bg-brandDarkBlue text-white border-b border-brandBlue/30 shadow-md">
      <div
        class="max-w-7xl mx-auto px-4 flex flex-col md:flex-row items-center justify-between gap-4 text-center md:text-left">
        <div class="max-w-xl">
          <h3 id="mid-cta-title" class="text-base sm:text-lg font-heading font-black text-white">Need Your <?php echo htmlspecialchars($srv['name']); ?> Fixed Today? We're In <?php echo htmlspecialchars($city_name); ?>.</h3>
          <p id="mid-cta-desc" class="text-xs sm:text-sm text-slate-200">Speak directly with our local dispatch team for immediate technician arrival and upfront written pricing.</p>
        </div>
        <div class="flex items-center justify-center gap-3 flex-shrink-0">
          <a href="tel:9057178905" onclick="trackGtmCall('appliance_mid_cta')"
            class="gtm-ppc-call gtm-ppc-call-mid bg-brandOrange hover:bg-brandOrangeHover text-white font-extrabold px-7 py-3.5 rounded-xl text-sm sm:text-base transition-all shadow-lg flex items-center justify-center gap-2 uppercase tracking-wide">
            <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
              </path>
            </svg>
            <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span><span>SPEAK WITH DISPATCH: 905-717-8905</span>
          </a>
        </div>
      </div>
    </section>

    <!-- SECTION 3: RECENT COMPLETED WORK GALLERY GRID (EXACT REFERENCE DESIGN) -->
    <section class="py-16 bg-slate-50 border-b border-brandBorder" id="recent-repairs">
      <div class="max-w-7xl mx-auto px-4 text-center">

        <!-- Top pill badge with shield icon -->
        <div
          class="inline-flex items-center gap-1.5 text-brandOrange font-extrabold text-xs uppercase tracking-widest mb-2.5">
          <svg class="w-4 h-4 text-brandOrange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
              d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
            </path>
          </svg>
          <svg class="w-3.5 h-3.5 text-brandBlue flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg><span>REAL LOCAL WORK COMPLETED TODAY</span>
        </div>

        <h2 class="text-2xl sm:text-4xl font-heading font-black text-brandDarkBlue uppercase tracking-tight mb-3">
          RECENT <?php echo htmlspecialchars(strtoupper($city_name)); ?> <?php echo htmlspecialchars(strtoupper($srv['name'])); ?> REPAIRS
        </h2>
        <p class="text-slate-700 text-xs sm:text-sm md:text-base max-w-2xl mx-auto mb-4 leading-relaxed font-medium">
          A glimpse of the diagnostics and <?php echo htmlspecialchars(strtolower($srv['name'])); ?> repairs recently completed by our local certified technicians across <?php echo htmlspecialchars($city_name); ?>.
        </p>
        <div class="w-20 h-1 bg-brandOrange mx-auto mb-10 rounded-full"></div>

        <!-- 5-Column Gallery Cards (Exact Reference Match) -->
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 sm:gap-6">

          <!-- Card 1: French Door Refrigerator -->
          <div
            class="group bg-white rounded-2xl overflow-hidden shadow-[0_4px_20px_-5px_rgba(0,0,0,0.05)] hover:shadow-[0_8px_25px_-5px_rgba(0,0,0,0.1)] border border-slate-100 transition-all duration-300 hover:-translate-y-1 flex flex-col">
            <div class="w-full h-44 sm:h-52 relative overflow-hidden bg-slate-100 shrink-0">
              <img src="../img/refrigerator-repair-service.webp" alt="French Door Refrigerator Repair"
                title="French Door Refrigerator Repair Toronto" width="300" height="300" loading="lazy" decoding="async"
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
            </div>
            <div class="relative bg-white px-2 sm:px-3 pb-5 sm:pb-6 flex flex-col items-center text-center flex-grow">
              <div
                class="w-12 h-12 sm:w-14 sm:h-14 shrink-0 bg-white rounded-full flex items-center justify-center shadow-md -mt-6 sm:-mt-7 mb-2 sm:mb-3 relative z-10">
                <div
                  class="w-9 h-9 sm:w-11 sm:h-11 rounded-full border border-brandOrange flex items-center justify-center bg-white">
                  <svg class="w-4 h-4 sm:w-5 sm:h-5 text-brandOrange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M7 3h10a2 2 0 012 2v14a2 2 0 01-2 2H7a2 2 0 01-2-2V5a2 2 0 012-2zM5 10h14M8 6h1M8 14h1"></path></svg>
                </div>
              </div>
              <h3
                class="font-heading font-black text-brandDarkBlue text-[11px] sm:text-[13px] uppercase tracking-wide leading-tight">
                FRENCH DOOR FRIDGE
              </h3>
              <p class="text-[10px] sm:text-xs text-slate-600 font-medium mt-1 leading-tight">
                North York • Cooling restored
              </p>
            </div>
          </div>

          <!-- Card 2: Side-by-Side Refrigerator -->
          <div
            class="group bg-white rounded-2xl overflow-hidden shadow-[0_4px_20px_-5px_rgba(0,0,0,0.05)] hover:shadow-[0_8px_25px_-5px_rgba(0,0,0,0.1)] border border-slate-100 transition-all duration-300 hover:-translate-y-1 flex flex-col">
            <div class="w-full h-44 sm:h-52 relative overflow-hidden bg-slate-100 shrink-0">
              <img src="../img/appliance-repair-technician-toronto.webp" alt="Side-by-Side Fridge Repair"
                title="Side-by-Side Fridge Repair Toronto" width="300" height="300" loading="lazy" decoding="async"
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
            </div>
            <div class="relative bg-white px-2 sm:px-3 pb-5 sm:pb-6 flex flex-col items-center text-center flex-grow">
              <div
                class="w-12 h-12 sm:w-14 sm:h-14 shrink-0 bg-white rounded-full flex items-center justify-center shadow-md -mt-6 sm:-mt-7 mb-2 sm:mb-3 relative z-10">
                <div
                  class="w-9 h-9 sm:w-11 sm:h-11 rounded-full border border-brandOrange flex items-center justify-center bg-white">
                  <svg class="w-4 h-4 sm:w-5 sm:h-5 text-brandOrange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M7 3h10a2 2 0 012 2v14a2 2 0 01-2 2H7a2 2 0 01-2-2V5a2 2 0 012-2zM12 3v18"></path></svg>
                </div>
              </div>
              <h3
                class="font-heading font-black text-brandDarkBlue text-[11px] sm:text-[13px] uppercase tracking-wide leading-tight">
                SIDE-BY-SIDE FRIDGE
              </h3>
              <p class="text-[10px] sm:text-xs text-slate-600 font-medium mt-1 leading-tight">
                Downtown Toronto • Leak fixed
              </p>
            </div>
          </div>

          <!-- Card 3: Built-In Refrigerator -->
          <div
            class="group bg-white rounded-2xl overflow-hidden shadow-[0_4px_20px_-5px_rgba(0,0,0,0.05)] hover:shadow-[0_8px_25px_-5px_rgba(0,0,0,0.1)] border border-slate-100 transition-all duration-300 hover:-translate-y-1 flex flex-col">
            <div class="w-full h-44 sm:h-52 relative overflow-hidden bg-slate-100 shrink-0">
              <img src="../img/appliance-repair-service-call.webp" alt="Built-In Refrigerator Repair"
                title="Built-In Refrigerator Repair Toronto" width="300" height="300" loading="lazy" decoding="async"
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
            </div>
            <div class="relative bg-white px-2 sm:px-3 pb-5 sm:pb-6 flex flex-col items-center text-center flex-grow">
              <div
                class="w-12 h-12 sm:w-14 sm:h-14 shrink-0 bg-white rounded-full flex items-center justify-center shadow-md -mt-6 sm:-mt-7 mb-2 sm:mb-3 relative z-10">
                <div
                  class="w-9 h-9 sm:w-11 sm:h-11 rounded-full border border-brandOrange flex items-center justify-center bg-white">
                  <svg class="w-4 h-4 sm:w-5 sm:h-5 text-brandOrange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                </div>
              </div>
              <h3
                class="font-heading font-black text-brandDarkBlue text-[11px] sm:text-[13px] uppercase tracking-wide leading-tight">
                BUILT-IN &amp; SUB-ZERO
              </h3>
              <p class="text-[10px] sm:text-xs text-slate-600 font-medium mt-1 leading-tight">
                Yorkville • Coils &amp; relay serviced
              </p>
            </div>
          </div>

          <!-- Card 4: Bottom-Freezer Refrigerator -->
          <div
            class="group bg-white rounded-2xl overflow-hidden shadow-[0_4px_20px_-5px_rgba(0,0,0,0.05)] hover:shadow-[0_8px_25px_-5px_rgba(0,0,0,0.1)] border border-slate-100 transition-all duration-300 hover:-translate-y-1 flex flex-col">
            <div class="w-full h-44 sm:h-52 relative overflow-hidden bg-slate-100 shrink-0">
              <img src="../img/oven-dryer-repair-service.webp" alt="Bottom-Freezer Refrigerator Repair"
                title="Bottom-Freezer Refrigerator Repair Toronto" width="300" height="300" loading="lazy" decoding="async"
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
            </div>
            <div class="relative bg-white px-2 sm:px-3 pb-5 sm:pb-6 flex flex-col items-center text-center flex-grow">
              <div
                class="w-12 h-12 sm:w-14 sm:h-14 shrink-0 bg-white rounded-full flex items-center justify-center shadow-md -mt-6 sm:-mt-7 mb-2 sm:mb-3 relative z-10">
                <div
                  class="w-9 h-9 sm:w-11 sm:h-11 rounded-full border border-brandOrange flex items-center justify-center bg-white">
                  <svg class="w-4 h-4 sm:w-5 sm:h-5 text-brandOrange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M7 3h10a2 2 0 012 2v14a2 2 0 01-2 2H7a2 2 0 01-2-2V5a2 2 0 012-2zM5 14h14"></path></svg>
                </div>
              </div>
              <h3
                class="font-heading font-black text-brandDarkBlue text-[11px] sm:text-[13px] uppercase tracking-wide leading-tight">
                BOTTOM-FREEZER FRIDGE
              </h3>
              <p class="text-[10px] sm:text-xs text-slate-600 font-medium mt-1 leading-tight">
                Etobicoke • Defrost system fixed
              </p>
            </div>
          </div>

          <!-- Card 5: Ice Maker & Dispenser Service -->
          <div
            class="group bg-white rounded-2xl overflow-hidden shadow-[0_4px_20px_-5px_rgba(0,0,0,0.05)] hover:shadow-[0_8px_25px_-5px_rgba(0,0,0,0.1)] border border-slate-100 transition-all duration-300 hover:-translate-y-1 flex flex-col">
            <div class="w-full h-44 sm:h-52 relative overflow-hidden bg-slate-100 shrink-0">
              <img src="../img/dryer-repair-inspection.webp" alt="Ice Maker and Water Dispenser Repair"
                title="Ice Maker and Water Dispenser Repair Toronto" width="300" height="300" loading="lazy" decoding="async"
                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
            </div>
            <div class="relative bg-white px-2 sm:px-3 pb-5 sm:pb-6 flex flex-col items-center text-center flex-grow">
              <div
                class="w-12 h-12 sm:w-14 sm:h-14 shrink-0 bg-white rounded-full flex items-center justify-center shadow-md -mt-6 sm:-mt-7 mb-2 sm:mb-3 relative z-10">
                <div
                  class="w-9 h-9 sm:w-11 sm:h-11 rounded-full border border-brandOrange flex items-center justify-center bg-white">
                  <svg class="w-4 h-4 sm:w-5 sm:h-5 text-brandOrange" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                </div>
              </div>
              <h3
                class="font-heading font-black text-brandDarkBlue text-[11px] sm:text-[13px] uppercase tracking-wide leading-tight">
                ICE MAKER &amp; DISPENSER
              </h3>
              <p class="text-[10px] sm:text-xs text-slate-600 font-medium mt-1 leading-tight">
                Scarborough • Dual valve replaced
              </p>
            </div>
          </div>

        </div>

      </div>
    </section>

    <!-- SECTION 4: WHY CHOOSE US (TIME, QUALITY, PRICE PILLARS) -->
    <section class="py-16 bg-white border-b border-brandBorder" id="why-choose-us">
      <div class="max-w-7xl mx-auto px-4 text-center">

        <div
          class="inline-flex items-center gap-1.5 text-brandOrange font-extrabold text-xs uppercase tracking-widest mb-2.5">
          <svg class="w-4 h-4 text-brandOrange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
              d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
            </path>
          </svg>
          <svg class="w-3.5 h-3.5 text-brandBlue flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg><span>THE APPLIANCE REPAIR KNIGHTS STANDARD</span>
        </div>
        <h2 class="text-2xl sm:text-4xl font-heading font-black text-brandDarkBlue uppercase tracking-tight mb-2">WHY LOCAL HOMEOWNERS TRUST US FIRST</h2>
        <p class="text-slate-700 text-xs sm:text-base max-w-2xl mx-auto mb-4 font-medium leading-relaxed">
          Fast response times, transparent written quotes with $0 diagnostic fee, and fully guaranteed workmanship.
        </p>
        <div class="w-20 h-1 bg-brandOrange mx-auto mb-12 rounded-full"></div>

        <!-- 3 Core Pillars: Time, Quality, Price -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-left">

          <!-- Pillar 1: TIME -->
          <div
            class="bg-slate-50 p-6 sm:p-8 rounded-3xl border border-slate-200 shadow-sm hover-lift flex flex-col justify-between">
            <div>
              <div class="w-14 h-14 rounded-2xl bg-amber-500/10 text-amber-700 flex items-center justify-center mb-5">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
              <span class="text-brandOrange text-xs font-black uppercase tracking-widest block mb-1">1. FAST RESPONSE
                (TIME)</span>
              <h3 class="font-heading font-bold text-brandDarkBlue text-xl mb-3">Same-Day Rapid Dispatch</h3>
              <p class="text-slate-700 text-xs sm:text-sm leading-relaxed">
                Appliance emergencies require swift action. Our local mobile vans are strategically deployed across
                Toronto & GTA to arrive fast with fully stocked parts, completing 85%+ of repairs on the very first
                visit.
              </p>
            </div>
            <div class="mt-6 pt-4 border-t border-slate-200 flex items-center gap-2 text-xs font-bold text-slate-800">
              <svg class="w-4 h-4 text-emerald-600 inline-block mr-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg> 15-Minute Response Time
            </div>
          </div>

          <!-- Pillar 2: QUALITY -->
          <div
            class="bg-slate-50 p-6 sm:p-8 rounded-3xl border border-slate-200 shadow-sm hover-lift flex flex-col justify-between">
            <div>
              <div class="w-14 h-14 rounded-2xl bg-brandBlue/10 text-brandBlue flex items-center justify-center mb-5">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 001.946.806 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z">
                  </path>
                </svg>
              </div>
              <span class="text-brandOrange text-xs font-black uppercase tracking-widest block mb-1">2. TOP STANDARDS
                (QUALITY)</span>
              <h3 class="font-heading font-bold text-brandDarkBlue text-xl mb-3">Licensed & Reliable Technicians</h3>
              <p class="text-slate-700 text-xs sm:text-sm leading-relaxed">
                Our repair specialists are licensed, insured, and highly experienced across all major household brands
                (Bosch, GE
                Appliances, KitchenAid, Frigidaire, Maytag, Sub-Zero, Miele and Samsung). We install brand-new,
                high-grade
                replacement parts with a written warranty.
              </p>
            </div>
            <div class="mt-6 pt-4 border-t border-slate-200 flex items-center gap-2 text-xs font-bold text-slate-800">
              <svg class="w-4 h-4 text-emerald-600 inline-block mr-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg> Factory-Trained & Licensed
            </div>
          </div>

          <!-- Pillar 3: PRICE -->
          <div
            class="bg-slate-50 p-6 sm:p-8 rounded-3xl border border-slate-200 shadow-sm hover-lift flex flex-col justify-between">
            <div>
              <div
                class="w-14 h-14 rounded-2xl bg-emerald-500/10 text-emerald-700 flex items-center justify-center mb-5">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                  </path>
                </svg>
              </div>
              <span class="text-brandOrange text-xs font-black uppercase tracking-widest block mb-1">3. REASONABLE RATES
                (PRICE)</span>
              <h3 class="font-heading font-bold text-brandDarkBlue text-xl mb-3">Upfront Flat-Rate Pricing</h3>
              <p class="text-slate-700 text-xs sm:text-sm leading-relaxed">
                Zero hidden charges or surprise invoices. We provide clear, transparent diagnostic quotes before
                starting any work. Plus, your diagnostic service call fee is 100% <strong
                  class="text-slate-900">FREE</strong> when you proceed
                with the repair!
              </p>
            </div>
            <div class="mt-6 pt-4 border-t border-slate-200 flex items-center gap-2 text-xs font-bold text-slate-800">
              <svg class="w-4 h-4 text-emerald-600 inline-block mr-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg> $0 Service Call With Repair
            </div>
          </div>

        </div>

        <!-- Compact Post-Why Choose Us Action Bar -->
        <div
          class="mt-10 pt-6 sm:pt-6 border-t border-slate-200/80 flex flex-col sm:flex-row items-center justify-between gap-4 bg-slate-50 p-5 sm:p-6 rounded-2xl border border-slate-200 shadow-xs">
          <div class="text-center sm:text-left">
            <h4 class="font-heading font-black text-brandDarkBlue text-sm sm:text-base">Experience Fast, Reliable
              Appliance Repairs</h4>
            <p class="text-xs text-slate-600 font-medium mt-0.5">Licensed technicians ready to dispatch across Toronto &
              GTA today.</p>
          </div>
          <div class="flex items-center gap-3 flex-shrink-0">
            <a href="tel:9057178905" onclick="trackGtmCall('why_us_bottom_cta')"
              class="gtm-ppc-call gtm-ppc-call-why-us bg-brandOrange hover:bg-brandOrangeHover text-white font-extrabold px-6 py-3 rounded-xl text-xs sm:text-sm uppercase tracking-wide transition-all shadow-md flex items-center gap-2">
              <svg class="w-4 h-4 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                </path>
              </svg>
              <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span><span>SPEAK WITH DISPATCH: 905-717-8905</span>
            </a>
          </div>
        </div>

      </div>
    </section>

    <!-- SECTION 7: REAL GOOGLE REVIEWS -->
    <section class="py-14 bg-white border-b border-brandBorder" id="reviews">
      <div class="max-w-7xl mx-auto px-4 text-center">

        <div
          class="inline-flex items-center gap-1.5 text-amber-600 bg-amber-50 border border-amber-200/80 px-3.5 py-1.5 rounded-full font-extrabold text-xs uppercase tracking-wider mb-2.5">
          <svg class="w-3.5 h-3.5 text-amber-500 fill-current flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
          <span>5.0-STAR GOOGLE VERIFIED REVIEWS</span>
        </div>
        <h2 class="text-2xl sm:text-3xl font-heading font-black text-brandDarkBlue uppercase tracking-tight mb-2">WHAT LOCAL HOMEOWNERS SAY ABOUT US</h2>
        <p class="text-slate-700 text-xs sm:text-sm max-w-xl mx-auto mb-4 leading-relaxed font-medium">
          Over 400+ five-star verified reviews from homeowners who needed fast, honest appliance repairs.
        </p>
        <div class="w-20 h-1 bg-brandOrange mx-auto mb-10 rounded-full"></div>

        <!-- Unified Responsive 5-Review Slider -->
        <style>
          #review-slider-container {
            overflow: hidden;
            width: 100%;
            position: relative;
          }

          #review-slider-track {
            display: flex;
            transition: transform 0.5s cubic-bezier(0.25, 1, 0.5, 1);
            width: 100%;
          }

          .review-slide-card {
            flex: 0 0 100%;
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
          }

          @media (min-width: 768px) {
            .review-slide-card {
              flex: 0 0 33.333333%;
              width: 33.333333%;
              max-width: 33.333333%;
            }
          }
        </style>

        <div class="relative">
          <div id="review-slider-container" class="py-2 rounded-2xl">
            <div id="review-slider-track">

              <!-- Review Card 1 (Harpreet Singh) -->
              <div class="review-slide-card px-2 md:px-3 flex">
                <div
                  class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200 text-left shadow-xs flex flex-col justify-between w-full hover:bg-white hover:border-brandOrange/40 hover:shadow-md transition-all duration-300">
                  <div>
                    <div class="flex items-center justify-between mb-3.5">
                      <div class="flex items-center gap-3">
                        <div
                          class="w-10 h-10 rounded-full bg-brandDarkBlue text-white font-extrabold flex items-center justify-center text-xs shadow-xs">
                          HS
                        </div>
                        <div>
                          <h3 class="font-heading font-extrabold text-brandDarkBlue text-sm leading-tight">Harpreet
                            Singh</h3>
                          <span class="text-[11px] text-slate-600 font-semibold">Greater Toronto Area</span>
                        </div>
                      </div>
                      <div
                        class="w-7 h-7 rounded-xl bg-white border border-slate-200 flex items-center justify-center p-1.5 flex-shrink-0 shadow-2xs">
                        <svg class="w-4 h-4" viewBox="0 0 24 24">
                          <path fill="#4285F4"
                            d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z" />
                          <path fill="#34A853"
                            d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.13C3.26 21.37 7.34 24 12 24z" />
                          <path fill="#FBBC05"
                            d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.25C.45 8.18 0 9.98 0 12s.45 3.82 1.25 5.42l4.03-3.13z" />
                          <path fill="#EA4335"
                            d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.34 0 3.26 2.63 1.25 6.58l4.03 3.13c.95-2.83 3.6-4.96 6.72-4.96z" />
                        </svg>
                      </div>
                    </div>

                    <div class="flex items-center justify-between mb-3">
                      <div class="flex items-center text-amber-400 space-x-0.5" aria-label="5 out of 5 stars"><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></div>
                      <span
                        class="inline-flex items-center gap-1 text-[10px] font-extrabold text-emerald-800 bg-emerald-100 px-2.5 py-0.5 rounded-full border border-emerald-300">
                        <svg class="w-3 h-3 fill-current text-emerald-700" viewBox="0 0 20 20">
                          <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                        </svg>
                        Verified Review
                      </span>
                    </div>

                    <p class="text-slate-700 text-xs sm:text-sm italic leading-relaxed mb-4">
                      "Had my washing machine repaired, and the service was excellent. The technician was knowledgeable
                      and explained everything clearly. The repair was completed quickly, and my appliance is working
                      perfectly again."
                    </p>
                  </div>

                  <div class="border-t border-slate-200 pt-3 mt-2 flex items-center justify-between text-xs">
                    <span class="font-heading font-bold text-brandDarkBlue">— Harpreet Singh</span>
                    <span class="text-[10px] text-slate-500 font-semibold">Washing Machine Repair</span>
                  </div>
                </div>
              </div>

              <!-- Review Card 2 (Shehraj Singh) -->
              <div class="review-slide-card px-2 md:px-3 flex">
                <div
                  class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200 text-left shadow-xs flex flex-col justify-between w-full hover:bg-white hover:border-brandOrange/40 hover:shadow-md transition-all duration-300">
                  <div>
                    <div class="flex items-center justify-between mb-3.5">
                      <div class="flex items-center gap-3">
                        <div
                          class="w-10 h-10 rounded-full bg-brandDarkBlue text-white font-extrabold flex items-center justify-center text-xs shadow-xs">
                          SS
                        </div>
                        <div>
                          <h3 class="font-heading font-extrabold text-brandDarkBlue text-sm leading-tight">Shehraj Singh
                          </h3>
                          <span class="text-[11px] text-slate-600 font-semibold">Brampton, ON</span>
                        </div>
                      </div>
                      <div
                        class="w-7 h-7 rounded-xl bg-white border border-slate-200 flex items-center justify-center p-1.5 flex-shrink-0 shadow-2xs">
                        <svg class="w-4 h-4" viewBox="0 0 24 24">
                          <path fill="#4285F4"
                            d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z" />
                          <path fill="#34A853"
                            d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.13C3.26 21.37 7.34 24 12 24z" />
                          <path fill="#FBBC05"
                            d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.25C.45 8.18 0 9.98 0 12s.45 3.82 1.25 5.42l4.03-3.13z" />
                          <path fill="#EA4335"
                            d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.34 0 3.26 2.63 1.25 6.58l4.03 3.13c.95-2.83 3.6-4.96 6.72-4.96z" />
                        </svg>
                      </div>
                    </div>

                    <div class="flex items-center justify-between mb-3">
                      <div class="flex items-center text-amber-400 space-x-0.5" aria-label="5 out of 5 stars"><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></div>
                      <span
                        class="inline-flex items-center gap-1 text-[10px] font-extrabold text-emerald-800 bg-emerald-100 px-2.5 py-0.5 rounded-full border border-emerald-300">
                        <svg class="w-3 h-3 fill-current text-emerald-700" viewBox="0 0 20 20">
                          <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                        </svg>
                        Verified Review
                      </span>
                    </div>

                    <p class="text-slate-700 text-xs sm:text-sm italic leading-relaxed mb-4">
                      "My washing machine broke But these Guys completely saved the day. The technician arrived exactly
                      on time, diagnosed the issue quickly, and explained the fix without any hidden fees. Very reliable
                      same-day service."
                    </p>
                  </div>

                  <div class="border-t border-slate-200 pt-3 mt-2 flex items-center justify-between text-xs">
                    <span class="font-heading font-bold text-brandDarkBlue">— Shehraj Singh</span>
                    <span class="text-[10px] text-slate-500 font-semibold">Washing Machine Repair</span>
                  </div>
                </div>
              </div>

              <!-- Review Card 3 (Nafisa Ali) -->
              <div class="review-slide-card px-2 md:px-3 flex">
                <div
                  class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200 text-left shadow-xs flex flex-col justify-between w-full hover:bg-white hover:border-brandOrange/40 hover:shadow-md transition-all duration-300">
                  <div>
                    <div class="flex items-center justify-between mb-3.5">
                      <div class="flex items-center gap-3">
                        <div
                          class="w-10 h-10 rounded-full bg-brandDarkBlue text-white font-extrabold flex items-center justify-center text-xs shadow-xs">
                          NA
                        </div>
                        <div>
                          <h3 class="font-heading font-extrabold text-brandDarkBlue text-sm leading-tight">Nafisa Ali
                          </h3>
                          <span class="text-[11px] text-slate-600 font-semibold">Mississauga, ON</span>
                        </div>
                      </div>
                      <div
                        class="w-7 h-7 rounded-xl bg-white border border-slate-200 flex items-center justify-center p-1.5 flex-shrink-0 shadow-2xs">
                        <svg class="w-4 h-4" viewBox="0 0 24 24">
                          <path fill="#4285F4"
                            d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z" />
                          <path fill="#34A853"
                            d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.13C3.26 21.37 7.34 24 12 24z" />
                          <path fill="#FBBC05"
                            d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.25C.45 8.18 0 9.98 0 12s.45 3.82 1.25 5.42l4.03-3.13z" />
                          <path fill="#EA4335"
                            d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.34 0 3.26 2.63 1.25 6.58l4.03 3.13c.95-2.83 3.6-4.96 6.72-4.96z" />
                        </svg>
                      </div>
                    </div>

                    <div class="flex items-center justify-between mb-3">
                      <div class="flex items-center text-amber-400 space-x-0.5" aria-label="5 out of 5 stars"><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></div>
                      <span
                        class="inline-flex items-center gap-1 text-[10px] font-extrabold text-emerald-800 bg-emerald-100 px-2.5 py-0.5 rounded-full border border-emerald-300">
                        <svg class="w-3 h-3 fill-current text-emerald-700" viewBox="0 0 20 20">
                          <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                        </svg>
                        Verified Review
                      </span>
                    </div>

                    <p class="text-slate-700 text-xs sm:text-sm italic leading-relaxed mb-4">
                      "Great service, good experience working with Sunny. Highly recommend Appliance Repair Knights for
                      anyone needing prompt and honest repair work."
                    </p>
                  </div>

                  <div class="border-t border-slate-200 pt-3 mt-2 flex items-center justify-between text-xs">
                    <span class="font-heading font-bold text-brandDarkBlue">— Nafisa Ali</span>
                    <span class="text-[10px] text-slate-500 font-semibold">Appliance Repair</span>
                  </div>
                </div>
              </div>

              <!-- Review Card 4 (Emily Smith) -->
              <div class="review-slide-card px-2 md:px-3 flex">
                <div
                  class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200 text-left shadow-xs flex flex-col justify-between w-full hover:bg-white hover:border-brandOrange/40 hover:shadow-md transition-all duration-300">
                  <div>
                    <div class="flex items-center justify-between mb-3.5">
                      <div class="flex items-center gap-3">
                        <div
                          class="w-10 h-10 rounded-full bg-brandDarkBlue text-white font-extrabold flex items-center justify-center text-xs shadow-xs">
                          ES
                        </div>
                        <div>
                          <h3 class="font-heading font-extrabold text-brandDarkBlue text-sm leading-tight">Emily Smith
                          </h3>
                          <span class="text-[11px] text-slate-600 font-semibold">Toronto, ON</span>
                        </div>
                      </div>
                      <div
                        class="w-7 h-7 rounded-xl bg-white border border-slate-200 flex items-center justify-center p-1.5 flex-shrink-0 shadow-2xs">
                        <svg class="w-4 h-4" viewBox="0 0 24 24">
                          <path fill="#4285F4"
                            d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z" />
                          <path fill="#34A853"
                            d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.13C3.26 21.37 7.34 24 12 24z" />
                          <path fill="#FBBC05"
                            d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.25C.45 8.18 0 9.98 0 12s.45 3.82 1.25 5.42l4.03-3.13z" />
                          <path fill="#EA4335"
                            d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.34 0 3.26 2.63 1.25 6.58l4.03 3.13c.95-2.83 3.6-4.96 6.72-4.96z" />
                        </svg>
                      </div>
                    </div>

                    <div class="flex items-center justify-between mb-3">
                      <div class="flex items-center text-amber-400 space-x-0.5" aria-label="5 out of 5 stars"><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></div>
                      <span
                        class="inline-flex items-center gap-1 text-[10px] font-extrabold text-emerald-800 bg-emerald-100 px-2.5 py-0.5 rounded-full border border-emerald-300">
                        <svg class="w-3 h-3 fill-current text-emerald-700" viewBox="0 0 20 20">
                          <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                        </svg>
                        Verified Review
                      </span>
                    </div>

                    <p class="text-slate-700 text-xs sm:text-sm italic leading-relaxed mb-4">
                      "Very happy with the service. He repaired my microwave a few months ago and I haven't had any
                      issues since. Professional, explained the problem clearly, and knew exactly what needed to be
                      done."
                    </p>
                  </div>

                  <div class="border-t border-slate-200 pt-3 mt-2 flex items-center justify-between text-xs">
                    <span class="font-heading font-bold text-brandDarkBlue">— Emily Smith</span>
                    <span class="text-[10px] text-slate-500 font-semibold">Microwave Repair</span>
                  </div>
                </div>
              </div>

              <!-- Review Card 5 (SunriseHomeservice Ltd.) -->
              <div class="review-slide-card px-2 md:px-3 flex">
                <div
                  class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200 text-left shadow-xs flex flex-col justify-between w-full hover:bg-white hover:border-brandOrange/40 hover:shadow-md transition-all duration-300">
                  <div>
                    <div class="flex items-center justify-between mb-3.5">
                      <div class="flex items-center gap-3">
                        <div
                          class="w-10 h-10 rounded-full bg-brandDarkBlue text-white font-extrabold flex items-center justify-center text-xs shadow-xs">
                          SH
                        </div>
                        <div>
                          <h3 class="font-heading font-extrabold text-brandDarkBlue text-sm leading-tight">
                            SunriseHomeservice</h3>
                          <span class="text-[11px] text-slate-600 font-semibold">Commercial Laundry</span>
                        </div>
                      </div>
                      <div
                        class="w-7 h-7 rounded-xl bg-white border border-slate-200 flex items-center justify-center p-1.5 flex-shrink-0 shadow-2xs">
                        <svg class="w-4 h-4" viewBox="0 0 24 24">
                          <path fill="#4285F4"
                            d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z" />
                          <path fill="#34A853"
                            d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.13C3.26 21.37 7.34 24 12 24z" />
                          <path fill="#FBBC05"
                            d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.25C.45 8.18 0 9.98 0 12s.45 3.82 1.25 5.42l4.03-3.13z" />
                          <path fill="#EA4335"
                            d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.34 0 3.26 2.63 1.25 6.58l4.03 3.13c.95-2.83 3.6-4.96 6.72-4.96z" />
                        </svg>
                      </div>
                    </div>

                    <div class="flex items-center justify-between mb-3">
                      <div class="flex items-center text-amber-400 space-x-0.5" aria-label="5 out of 5 stars"><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></div>
                      <span
                        class="inline-flex items-center gap-1 text-[10px] font-extrabold text-emerald-800 bg-emerald-100 px-2.5 py-0.5 rounded-full border border-emerald-300">
                        <svg class="w-3 h-3 fill-current text-emerald-700" viewBox="0 0 20 20">
                          <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                        </svg>
                        Verified Review
                      </span>
                    </div>

                    <p class="text-slate-700 text-xs sm:text-sm italic leading-relaxed mb-4">
                      "Our business needed to get the Laundry fixed (Bosch washer). Their technician was very
                      knowledgeable. Ordered correct part and fixed the issue. Very easy to communicate and no hassle."
                    </p>
                  </div>

                  <div class="border-t border-slate-200 pt-3 mt-2 flex items-center justify-between text-xs">
                    <span class="font-heading font-bold text-brandDarkBlue">— SunriseHomeservice Ltd.</span>
                    <span class="text-[10px] text-slate-500 font-semibold">Bosch Washer Repair</span>
                  </div>
                </div>
              </div>

              <!-- Review Card 6 (Shivam Kataria) -->
              <div class="review-slide-card px-2 md:px-3 flex">
                <div
                  class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200 text-left shadow-xs flex flex-col justify-between w-full hover:bg-white hover:border-brandOrange/40 hover:shadow-md transition-all duration-300">
                  <div>
                    <div class="flex items-center justify-between mb-3.5">
                      <div class="flex items-center gap-3">
                        <div
                          class="w-10 h-10 rounded-full bg-brandDarkBlue text-white font-extrabold flex items-center justify-center text-xs shadow-xs">
                          SK
                        </div>
                        <div>
                          <h3 class="font-heading font-extrabold text-brandDarkBlue text-sm leading-tight">Shivam
                            Kataria</h3>
                          <span class="text-[11px] text-slate-600 font-semibold">Toronto, ON</span>
                        </div>
                      </div>
                      <div
                        class="w-7 h-7 rounded-xl bg-white border border-slate-200 flex items-center justify-center p-1.5 flex-shrink-0 shadow-2xs">
                        <svg class="w-4 h-4" viewBox="0 0 24 24">
                          <path fill="#4285F4"
                            d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z" />
                          <path fill="#34A853"
                            d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.13C3.26 21.37 7.34 24 12 24z" />
                          <path fill="#FBBC05"
                            d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.25C.45 8.18 0 9.98 0 12s.45 3.82 1.25 5.42l4.03-3.13z" />
                          <path fill="#EA4335"
                            d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.34 0 3.26 2.63 1.25 6.58l4.03 3.13c.95-2.83 3.6-4.96 6.72-4.96z" />
                        </svg>
                      </div>
                    </div>

                    <div class="flex items-center justify-between mb-3">
                      <div class="flex items-center text-amber-400 space-x-0.5" aria-label="5 out of 5 stars"><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></div>
                      <span
                        class="inline-flex items-center gap-1 text-[10px] font-extrabold text-emerald-800 bg-emerald-100 px-2.5 py-0.5 rounded-full border border-emerald-300">
                        <svg class="w-3 h-3 fill-current text-emerald-700" viewBox="0 0 20 20">
                          <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                        </svg>
                        Verified Review
                      </span>
                    </div>

                    <p class="text-slate-700 text-xs sm:text-sm italic leading-relaxed mb-4">
                      "My washer randomly stopped working and i thought it was gonna be a whole headache, but it was
                      actually pretty smooth. These guys came on time, checked it out, fixed it without overcharging.
                      Would call them again!"
                    </p>
                  </div>

                  <div class="border-t border-slate-200 pt-3 mt-2 flex items-center justify-between text-xs">
                    <span class="font-heading font-bold text-brandDarkBlue">— Shivam Kataria</span>
                    <span class="text-[10px] text-slate-500 font-semibold">Washer Repair</span>
                  </div>
                </div>
              </div>

              <!-- Review Card 7 (Tanpreet Parmar) -->
              <div class="review-slide-card px-2 md:px-3 flex">
                <div
                  class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200 text-left shadow-xs flex flex-col justify-between w-full hover:bg-white hover:border-brandOrange/40 hover:shadow-md transition-all duration-300">
                  <div>
                    <div class="flex items-center justify-between mb-3.5">
                      <div class="flex items-center gap-3">
                        <div
                          class="w-10 h-10 rounded-full bg-brandDarkBlue text-white font-extrabold flex items-center justify-center text-xs shadow-xs">
                          TP
                        </div>
                        <div>
                          <h3 class="font-heading font-extrabold text-brandDarkBlue text-sm leading-tight">Tanpreet
                            Parmar</h3>
                          <span class="text-[11px] text-slate-600 font-semibold">Oakville, ON</span>
                        </div>
                      </div>
                      <div
                        class="w-7 h-7 rounded-xl bg-white border border-slate-200 flex items-center justify-center p-1.5 flex-shrink-0 shadow-2xs">
                        <svg class="w-4 h-4" viewBox="0 0 24 24">
                          <path fill="#4285F4"
                            d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z" />
                          <path fill="#34A853"
                            d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.13C3.26 21.37 7.34 24 12 24z" />
                          <path fill="#FBBC05"
                            d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.25C.45 8.18 0 9.98 0 12s.45 3.82 1.25 5.42l4.03-3.13z" />
                          <path fill="#EA4335"
                            d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.34 0 3.26 2.63 1.25 6.58l4.03 3.13c.95-2.83 3.6-4.96 6.72-4.96z" />
                        </svg>
                      </div>
                    </div>

                    <div class="flex items-center justify-between mb-3">
                      <div class="flex items-center text-amber-400 space-x-0.5" aria-label="5 out of 5 stars"><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></div>
                      <span
                        class="inline-flex items-center gap-1 text-[10px] font-extrabold text-emerald-800 bg-emerald-100 px-2.5 py-0.5 rounded-full border border-emerald-300">
                        <svg class="w-3 h-3 fill-current text-emerald-700" viewBox="0 0 20 20">
                          <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                        </svg>
                        Verified Review
                      </span>
                    </div>

                    <p class="text-slate-700 text-xs sm:text-sm italic leading-relaxed mb-4">
                      "Great service with Sunny. He repaired my broken dishwasher in a cheaper amount and his service is
                      amazing."
                    </p>
                  </div>

                  <div class="border-t border-slate-200 pt-3 mt-2 flex items-center justify-between text-xs">
                    <span class="font-heading font-bold text-brandDarkBlue">— Tanpreet Parmar</span>
                    <span class="text-[10px] text-slate-500 font-semibold">Dishwasher Repair</span>
                  </div>
                </div>
              </div>

              <!-- Review Card 8 (Sahibpreet Kaur) -->
              <div class="review-slide-card px-2 md:px-3 flex">
                <div
                  class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200 text-left shadow-xs flex flex-col justify-between w-full hover:bg-white hover:border-brandOrange/40 hover:shadow-md transition-all duration-300">
                  <div>
                    <div class="flex items-center justify-between mb-3.5">
                      <div class="flex items-center gap-3">
                        <div
                          class="w-10 h-10 rounded-full bg-brandDarkBlue text-white font-extrabold flex items-center justify-center text-xs shadow-xs">
                          SK
                        </div>
                        <div>
                          <h3 class="font-heading font-extrabold text-brandDarkBlue text-sm leading-tight">Sahibpreet
                            Kaur</h3>
                          <span class="text-[11px] text-slate-600 font-semibold">Hamilton, ON</span>
                        </div>
                      </div>
                      <div
                        class="w-7 h-7 rounded-xl bg-white border border-slate-200 flex items-center justify-center p-1.5 flex-shrink-0 shadow-2xs">
                        <svg class="w-4 h-4" viewBox="0 0 24 24">
                          <path fill="#4285F4"
                            d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z" />
                          <path fill="#34A853"
                            d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.13C3.26 21.37 7.34 24 12 24z" />
                          <path fill="#FBBC05"
                            d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.25C.45 8.18 0 9.98 0 12s.45 3.82 1.25 5.42l4.03-3.13z" />
                          <path fill="#EA4335"
                            d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.34 0 3.26 2.63 1.25 6.58l4.03 3.13c.95-2.83 3.6-4.96 6.72-4.96z" />
                        </svg>
                      </div>
                    </div>

                    <div class="flex items-center justify-between mb-3">
                      <div class="flex items-center text-amber-400 space-x-0.5" aria-label="5 out of 5 stars"><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></div>
                      <span
                        class="inline-flex items-center gap-1 text-[10px] font-extrabold text-emerald-800 bg-emerald-100 px-2.5 py-0.5 rounded-full border border-emerald-300">
                        <svg class="w-3 h-3 fill-current text-emerald-700" viewBox="0 0 20 20">
                          <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                        </svg>
                        Verified Review
                      </span>
                    </div>

                    <p class="text-slate-700 text-xs sm:text-sm italic leading-relaxed mb-4">
                      "Great experience! Professional service at a very fair price. Highly recommended for any household
                      appliance repair."
                    </p>
                  </div>

                  <div class="border-t border-slate-200 pt-3 mt-2 flex items-center justify-between text-xs">
                    <span class="font-heading font-bold text-brandDarkBlue">— Sahibpreet Kaur</span>
                    <span class="text-[10px] text-slate-500 font-semibold">Appliance Repair</span>
                  </div>
                </div>
              </div>

              <!-- Review Card 9 (Dan Silverman) -->
              <div class="review-slide-card px-2 md:px-3 flex">
                <div
                  class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200 text-left shadow-xs flex flex-col justify-between w-full hover:bg-white hover:border-brandOrange/40 hover:shadow-md transition-all duration-300">
                  <div>
                    <div class="flex items-center justify-between mb-3.5">
                      <div class="flex items-center gap-3">
                        <div
                          class="w-10 h-10 rounded-full bg-brandDarkBlue text-white font-extrabold flex items-center justify-center text-xs shadow-xs">
                          DS
                        </div>
                        <div>
                          <h3 class="font-heading font-extrabold text-brandDarkBlue text-sm leading-tight">Dan Silverman
                          </h3>
                          <span class="text-[11px] text-slate-600 font-semibold">Vaughan, ON</span>
                        </div>
                      </div>
                      <div
                        class="w-7 h-7 rounded-xl bg-white border border-slate-200 flex items-center justify-center p-1.5 flex-shrink-0 shadow-2xs">
                        <svg class="w-4 h-4" viewBox="0 0 24 24">
                          <path fill="#4285F4"
                            d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z" />
                          <path fill="#34A853"
                            d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.13C3.26 21.37 7.34 24 12 24z" />
                          <path fill="#FBBC05"
                            d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.25C.45 8.18 0 9.98 0 12s.45 3.82 1.25 5.42l4.03-3.13z" />
                          <path fill="#EA4335"
                            d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.34 0 3.26 2.63 1.25 6.58l4.03 3.13c.95-2.83 3.6-4.96 6.72-4.96z" />
                        </svg>
                      </div>
                    </div>

                    <div class="flex items-center justify-between mb-3">
                      <div class="flex items-center text-amber-400 space-x-0.5" aria-label="5 out of 5 stars"><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></div>
                      <span
                        class="inline-flex items-center gap-1 text-[10px] font-extrabold text-emerald-800 bg-emerald-100 px-2.5 py-0.5 rounded-full border border-emerald-300">
                        <svg class="w-3 h-3 fill-current text-emerald-700" viewBox="0 0 20 20">
                          <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                        </svg>
                        Verified Review
                      </span>
                    </div>

                    <p class="text-slate-700 text-xs sm:text-sm italic leading-relaxed mb-4">
                      "I needed help with my LG washer. It had stopped draining but Sunny was really helpful. He
                      efficiently diagnosed the problem and explained what went wrong. Got the washer running within 48
                      Hours!"
                    </p>
                  </div>

                  <div class="border-t border-slate-200 pt-3 mt-2 flex items-center justify-between text-xs">
                    <span class="font-heading font-bold text-brandDarkBlue">— Dan Silverman</span>
                    <span class="text-[10px] text-slate-500 font-semibold">LG Washer Repair</span>
                  </div>
                </div>
              </div>

              <!-- Review Card 10 (Remil Mathew) -->
              <div class="review-slide-card px-2 md:px-3 flex">
                <div
                  class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200 text-left shadow-xs flex flex-col justify-between w-full hover:bg-white hover:border-brandOrange/40 hover:shadow-md transition-all duration-300">
                  <div>
                    <div class="flex items-center justify-between mb-3.5">
                      <div class="flex items-center gap-3">
                        <div
                          class="w-10 h-10 rounded-full bg-brandDarkBlue text-white font-extrabold flex items-center justify-center text-xs shadow-xs">
                          RM
                        </div>
                        <div>
                          <h3 class="font-heading font-extrabold text-brandDarkBlue text-sm leading-tight">Remil Mathew
                          </h3>
                          <span class="text-[11px] text-slate-600 font-semibold">Etobicoke, ON</span>
                        </div>
                      </div>
                      <div
                        class="w-7 h-7 rounded-xl bg-white border border-slate-200 flex items-center justify-center p-1.5 flex-shrink-0 shadow-2xs">
                        <svg class="w-4 h-4" viewBox="0 0 24 24">
                          <path fill="#4285F4"
                            d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z" />
                          <path fill="#34A853"
                            d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.13C3.26 21.37 7.34 24 12 24z" />
                          <path fill="#FBBC05"
                            d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.25C.45 8.18 0 9.98 0 12s.45 3.82 1.25 5.42l4.03-3.13z" />
                          <path fill="#EA4335"
                            d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.34 0 3.26 2.63 1.25 6.58l4.03 3.13c.95-2.83 3.6-4.96 6.72-4.96z" />
                        </svg>
                      </div>
                    </div>

                    <div class="flex items-center justify-between mb-3">
                      <div class="flex items-center text-amber-400 space-x-0.5" aria-label="5 out of 5 stars"><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></div>
                      <span
                        class="inline-flex items-center gap-1 text-[10px] font-extrabold text-emerald-800 bg-emerald-100 px-2.5 py-0.5 rounded-full border border-emerald-300">
                        <svg class="w-3 h-3 fill-current text-emerald-700" viewBox="0 0 20 20">
                          <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                        </svg>
                        Verified Review
                      </span>
                    </div>

                    <p class="text-slate-700 text-xs sm:text-sm italic leading-relaxed mb-4">
                      "Great service experience with Sunny! Very prompt response, honest pricing, and professional
                      diagnosis."
                    </p>
                  </div>

                  <div class="border-t border-slate-200 pt-3 mt-2 flex items-center justify-between text-xs">
                    <span class="font-heading font-bold text-brandDarkBlue">— Remil Mathew</span>
                    <span class="text-[10px] text-slate-500 font-semibold">Appliance Repair</span>
                  </div>
                </div>
              </div>

              <!-- Review Card 11 (Khushboo Goel) -->
              <div class="review-slide-card px-2 md:px-3 flex">
                <div
                  class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200 text-left shadow-xs flex flex-col justify-between w-full hover:bg-white hover:border-brandOrange/40 hover:shadow-md transition-all duration-300">
                  <div>
                    <div class="flex items-center justify-between mb-3.5">
                      <div class="flex items-center gap-3">
                        <div
                          class="w-10 h-10 rounded-full bg-brandDarkBlue text-white font-extrabold flex items-center justify-center text-xs shadow-xs">
                          KG
                        </div>
                        <div>
                          <h3 class="font-heading font-extrabold text-brandDarkBlue text-sm leading-tight">Khushboo Goel
                          </h3>
                          <span class="text-[11px] text-slate-600 font-semibold">Mississauga, ON</span>
                        </div>
                      </div>
                      <div
                        class="w-7 h-7 rounded-xl bg-white border border-slate-200 flex items-center justify-center p-1.5 flex-shrink-0 shadow-2xs">
                        <svg class="w-4 h-4" viewBox="0 0 24 24">
                          <path fill="#4285F4"
                            d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z" />
                          <path fill="#34A853"
                            d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.13C3.26 21.37 7.34 24 12 24z" />
                          <path fill="#FBBC05"
                            d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.25C.45 8.18 0 9.98 0 12s.45 3.82 1.25 5.42l4.03-3.13z" />
                          <path fill="#EA4335"
                            d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.34 0 3.26 2.63 1.25 6.58l4.03 3.13c.95-2.83 3.6-4.96 6.72-4.96z" />
                        </svg>
                      </div>
                    </div>

                    <div class="flex items-center justify-between mb-3">
                      <div class="flex items-center text-amber-400 space-x-0.5" aria-label="5 out of 5 stars"><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></div>
                      <span
                        class="inline-flex items-center gap-1 text-[10px] font-extrabold text-emerald-800 bg-emerald-100 px-2.5 py-0.5 rounded-full border border-emerald-300">
                        <svg class="w-3 h-3 fill-current text-emerald-700" viewBox="0 0 20 20">
                          <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                        </svg>
                        Verified Review
                      </span>
                    </div>

                    <p class="text-slate-700 text-xs sm:text-sm italic leading-relaxed mb-4">
                      "I had problem with my stove and dishwasher and the service was excellent. The technician repair
                      was completed quickly, and my appliance is working perfectly again. Price assessment: Reasonable
                      price."
                    </p>
                  </div>

                  <div class="border-t border-slate-200 pt-3 mt-2 flex items-center justify-between text-xs">
                    <span class="font-heading font-bold text-brandDarkBlue">— Khushboo Goel</span>
                    <span class="text-[10px] text-slate-500 font-semibold">Stove & Dishwasher</span>
                  </div>
                </div>
              </div>

              <!-- Review Card 12 (Sahra Ensafi) -->
              <div class="review-slide-card px-2 md:px-3 flex">
                <div
                  class="bg-slate-50/80 p-6 rounded-2xl border border-slate-200 text-left shadow-xs flex flex-col justify-between w-full hover:bg-white hover:border-brandOrange/40 hover:shadow-md transition-all duration-300">
                  <div>
                    <div class="flex items-center justify-between mb-3.5">
                      <div class="flex items-center gap-3">
                        <div
                          class="w-10 h-10 rounded-full bg-brandDarkBlue text-white font-extrabold flex items-center justify-center text-xs shadow-xs">
                          SE
                        </div>
                        <div>
                          <h3 class="font-heading font-extrabold text-brandDarkBlue text-sm leading-tight">Sahra Ensafi
                          </h3>
                          <span class="text-[11px] text-slate-600 font-semibold">Richmond Hill, ON</span>
                        </div>
                      </div>
                      <div
                        class="w-7 h-7 rounded-xl bg-white border border-slate-200 flex items-center justify-center p-1.5 flex-shrink-0 shadow-2xs">
                        <svg class="w-4 h-4" viewBox="0 0 24 24">
                          <path fill="#4285F4"
                            d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z" />
                          <path fill="#34A853"
                            d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.13C3.26 21.37 7.34 24 12 24z" />
                          <path fill="#FBBC05"
                            d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.25C.45 8.18 0 9.98 0 12s.45 3.82 1.25 5.42l4.03-3.13z" />
                          <path fill="#EA4335"
                            d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.34 0 3.26 2.63 1.25 6.58l4.03 3.13c.95-2.83 3.6-4.96 6.72-4.96z" />
                        </svg>
                      </div>
                    </div>

                    <div class="flex items-center justify-between mb-3">
                      <div class="flex items-center text-amber-400 space-x-0.5" aria-label="5 out of 5 stars"><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></div>
                      <span
                        class="inline-flex items-center gap-1 text-[10px] font-extrabold text-emerald-800 bg-emerald-100 px-2.5 py-0.5 rounded-full border border-emerald-300">
                        <svg class="w-3 h-3 fill-current text-emerald-700" viewBox="0 0 20 20">
                          <path fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                            clip-rule="evenodd"></path>
                        </svg>
                        Verified Review
                      </span>
                    </div>

                    <p class="text-slate-700 text-xs sm:text-sm italic leading-relaxed mb-4">
                      "I contacted this company on a coworker's recommendation to repair my oven. Exceptional customer
                      service, and Sunny went above and beyond to resolve the issue. Strongly recommend!"
                    </p>
                  </div>

                  <div class="border-t border-slate-200 pt-3 mt-2 flex items-center justify-between text-xs">
                    <span class="font-heading font-bold text-brandDarkBlue">— Sahra Ensafi</span>
                    <span class="text-[10px] text-slate-500 font-semibold">Oven Repair</span>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <!-- Slider Navigation & Indicators (Unified) -->
          <div class="flex items-center justify-between mt-6 px-2">
            <button onclick="prevReviewSlide()" aria-label="Previous Review"
              class="w-10 h-10 rounded-full bg-white border border-slate-300 shadow-xs flex items-center justify-center text-brandDarkBlue hover:bg-brandOrange hover:text-white hover:border-brandOrange transition-all cursor-pointer">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
              </svg>
            </button>

            <!-- Indicators (Dot 4 & 5 hidden on desktop as desktop only scrolls up to index 2) -->
            <div class="flex items-center gap-1.5">
              <button onclick="goToReviewSlide(0)"
                class="review-dot w-6 h-2 rounded-full bg-brandOrange transition-all cursor-pointer"
                aria-label="Slide 1"></button>
              <button onclick="goToReviewSlide(1)"
                class="review-dot w-2 h-2 rounded-full bg-slate-300 transition-all cursor-pointer"
                aria-label="Slide 2"></button>
              <button onclick="goToReviewSlide(2)"
                class="review-dot w-2 h-2 rounded-full bg-slate-300 transition-all cursor-pointer"
                aria-label="Slide 3"></button>
              <button onclick="goToReviewSlide(3)"
                class="review-dot md:hidden w-2 h-2 rounded-full bg-slate-300 transition-all cursor-pointer"
                aria-label="Slide 4"></button>
              <button onclick="goToReviewSlide(4)"
                class="review-dot md:hidden w-2 h-2 rounded-full bg-slate-300 transition-all cursor-pointer"
                aria-label="Slide 5"></button>
            </div>

            <button onclick="nextReviewSlide()" aria-label="Next Review"
              class="w-10 h-10 rounded-full bg-white border border-slate-300 shadow-xs flex items-center justify-center text-brandDarkBlue hover:bg-brandOrange hover:text-white hover:border-brandOrange transition-all cursor-pointer">
              <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
              </svg>
            </button>
          </div>
        </div>

        <!-- High-Trust Booking Bar Under Reviews (Keeps Users on Page, Maximizes Conversion) -->
        <div
          class="mt-10 pt-6 border-t border-slate-200 flex flex-col sm:flex-row items-center justify-between gap-4 bg-slate-50 p-5 rounded-2xl border border-slate-200/80 shadow-xs">
          <div class="flex items-center gap-3 text-left">
            <!-- Google Trust Logo / Icon (No Link) -->
            <div
              class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-white p-2 border border-slate-200 shadow-2xs flex items-center justify-center flex-shrink-0">
              <svg class="w-5 h-5" viewBox="0 0 24 24">
                <path fill="#4285F4"
                  d="M23.745 12.27c0-.7-.06-1.4-.19-2.07H12v4.51h6.6c-.29 1.52-1.14 2.8-2.4 3.65v3.03h3.88c2.27-2.09 3.665-5.17 3.665-9.12z" />
                <path fill="#34A853"
                  d="M12 24c3.24 0 5.95-1.08 7.93-2.91l-3.88-3.03c-1.08.72-2.45 1.16-4.05 1.16-3.12 0-5.77-2.1-6.72-4.93H1.25v3.13C3.26 21.37 7.34 24 12 24z" />
                <path fill="#FBBC05"
                  d="M5.28 14.29c-.25-.72-.38-1.49-.38-2.29s.13-1.57.38-2.29V6.58H1.25C.45 8.18 0 9.98 0 12s.45 3.82 1.25 5.42l4.03-3.13z" />
                <path fill="#EA4335"
                  d="M12 4.75c1.77 0 3.35.61 4.6 1.8l3.42-3.42C17.95 1.19 15.24 0 12 0 7.34 0 3.26 2.63 1.25 6.58l4.03 3.13c.95-2.83 3.6-4.96 6.72-4.96z" />
              </svg>
            </div>
            <div>
              <div class="flex flex-wrap items-center gap-1.5">
                <span class="font-heading font-extrabold text-brandDarkBlue text-xs sm:text-sm">Appliance Repair Knights
                  Ltd.</span>
                <span class="text-slate-400 hidden sm:inline">•</span>
                <span class="text-xs font-extrabold text-slate-800">5.0</span>
                <div class="flex items-center text-amber-400 space-x-0.5" aria-label="5 out of 5 stars"><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg><svg class="w-3.5 h-3.5 fill-current text-amber-400 flex-shrink-0" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></div>
                <span class="text-[11px] text-slate-600 font-bold">(12)</span>
              </div>
              <span class="text-[11px] text-slate-600 font-medium block mt-0.5">Verified Google Business Profile •
                Toronto, Mississauga, Brampton & GTA</span>
            </div>
          </div>
          <a href="tel:905-717-8905" onclick="trackGtmCall('reviews_trust_bar')"
            class="gtm-ppc-call gtm-ppc-call-reviews bg-brandOrange hover:bg-brandOrangeHover text-white font-extrabold text-xs px-6 py-3 rounded-xl uppercase tracking-wider transition-all shadow-md flex items-center justify-center gap-2 flex-shrink-0">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
              </path>
            </svg>
            CALL 905-717-8905 NOW
          </a>
        </div>

      </div>
    </section>

    <!-- SECTION 5: SERVICE AREA - GEOGRAPHIC COVERAGE & RADIUS -->
    <section class="py-16 bg-white border-b border-brandBorder" id="service-areas">
      <div class="max-w-7xl mx-auto px-4">

        <div class="text-center mb-10">
          <div
            class="inline-flex items-center gap-1.5 text-brandOrange font-extrabold text-xs uppercase tracking-widest mb-2.5">
            <svg class="w-4 h-4 text-brandOrange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            <span>RAPID DISPATCH RADIUS</span>
          </div>
          <h2 class="text-2xl sm:text-3xl font-heading font-black text-brandDarkBlue uppercase tracking-tight mb-2">
            SERVICE AREA & COVERAGE RADIUS
          </h2>
          <p class="text-slate-700 text-xs sm:text-sm max-w-xl mx-auto mb-4 leading-relaxed font-medium">
            Local service technicians stationed across Southern Ontario for fast on-site dispatch.
          </p>
          <div class="w-20 h-1 bg-brandOrange mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

          <!-- Cities List Grid -->
          <div class="lg:col-span-7 bg-slate-50 p-6 sm:p-8 rounded-3xl border border-slate-200 shadow-sm">
            <h3 class="font-heading font-bold text-brandDarkBlue text-base mb-4 flex items-center gap-2">
              <svg class="w-5 h-5 text-brandOrange" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                  d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                  clip-rule="evenodd"></path>
              </svg>
              Toronto Neighborhoods &amp; Surrounding Areas We Serve:
            </h3>

            <div
              class="grid grid-cols-2 sm:grid-cols-3 gap-y-3 gap-x-4 text-xs sm:text-sm text-slate-800 font-semibold">
              <div class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-brandOrange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg> Downtown Toronto</div>
              <div class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-brandOrange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg> North York</div>
              <div class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-brandOrange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg> Scarborough</div>
              <div class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-brandOrange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg> Etobicoke</div>
              <div class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-brandOrange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg> Midtown &amp; Yorkville</div>
              <div class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-brandOrange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg> East York &amp; Beaches</div>
              <div class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-brandOrange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg> High Park &amp; Junction</div>
              <div class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-brandOrange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg> Forest Hill &amp; Rosedale</div>
              <div class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-brandOrange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg> Leaside &amp; Davisville</div>
              <div class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-brandOrange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg> Mississauga</div>
              <div class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-brandOrange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg> Brampton</div>
              <div class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-brandOrange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg> Vaughan &amp; Woodbridge</div>
              <div class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-brandOrange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg> Markham &amp; Richmond Hill</div>
              <div class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-brandOrange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg> Oakville</div>
              <div class="flex items-center gap-1.5"><svg class="w-3.5 h-3.5 text-brandOrange flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg> Milton &amp; Burlington</div>
            </div>

            <div class="mt-6 pt-4 border-t border-slate-200 flex flex-wrap items-center justify-between gap-3">
              <span class="text-xs text-slate-600 font-medium">Don't see your city? We cover all surrounding GTA towns
                within a 50km radius!</span>
              <a href="#ppc-quote-form"
                class="text-xs text-brandOrange font-extrabold hover:underline flex items-center gap-1">Confirm Your
                Location →</a>
            </div>
          </div>

          <!-- Dispatch Graphic Card -->
          <div
            class="lg:col-span-5 bg-brandDarkBlue rounded-3xl p-6 sm:p-8 text-white relative overflow-hidden min-h-[320px] flex flex-col justify-between shadow-xl">
            <div>
              <span
                class="inline-flex items-center gap-1.5 bg-brandOrange text-white text-[10px] font-extrabold uppercase px-2.5 py-1 rounded-md mb-3">
                <svg class="w-3.5 h-3.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                </svg>
                <span>50km Coverage Radius</span>
              </span>
              <h3 class="text-2xl font-heading font-black mb-2 text-white">Same-Day Tech Dispatch</h3>
              <p class="text-xs text-slate-200 leading-relaxed">
                Local mobile service vans are stationed strategically throughout Toronto, Peel, Halton, Waterloo and
                Durham regions for rapid arrival.
              </p>
            </div>

            <div class="space-y-2 my-4">
              <div class="flex justify-between items-center text-xs bg-white/10 p-2.5 rounded-xl backdrop-blur-xs">
                <span class="text-slate-100 font-medium">Central GTA Dispatch</span>
                <span class="text-emerald-400 font-bold">● Active Technicians</span>
              </div>
              <div class="flex justify-between items-center text-xs bg-white/10 p-2.5 rounded-xl backdrop-blur-xs">
                <span class="text-slate-100 font-medium">Hamilton & West Ontario</span>
                <span class="text-emerald-400 font-bold">● Active Technicians</span>
              </div>
              <div class="flex justify-between items-center text-xs bg-white/10 p-2.5 rounded-xl backdrop-blur-xs">
                <span class="text-slate-100 font-medium">Kitchener-Waterloo Hub</span>
                <span class="text-emerald-400 font-bold">● Active Technicians</span>
              </div>
            </div>

            <a href="tel:9057178905" onclick="trackGtmCall('service_area')"
              class="gtm-ppc-call gtm-ppc-call-servicearea bg-white text-brandDarkBlue hover:bg-brandOrange hover:text-white font-extrabold py-3 px-5 rounded-xl text-xs uppercase tracking-wider text-center transition-all shadow-md">
              CALL DISPATCH 905-717-8905
            </a>
          </div>

        </div>

      </div>
    </section>

    <!-- SECTION 6: FAQ SECTION - COMMON QUESTIONS (INTERACTIVE ACCORDION) -->
    <section class="py-16 bg-slate-50 border-b border-brandBorder" id="faq">
      <div class="max-w-4xl mx-auto px-4">

        <div class="text-center mb-10">
          <div
            class="inline-flex items-center gap-1.5 text-brandOrange font-extrabold text-xs uppercase tracking-widest mb-2.5">
            <svg class="w-4 h-4 text-brandOrange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
              </path>
            </svg>
            <svg class="w-3.5 h-3.5 text-brandBlue flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg><span>CLEAR &amp; TRANSPARENT ANSWERS</span>
          </div>
          <h2 class="text-2xl sm:text-3xl font-heading font-black text-brandDarkBlue uppercase tracking-tight mb-2">
            FREQUENTLY ASKED QUESTIONS
          </h2>
          <p class="text-slate-700 text-xs sm:text-sm max-w-xl mx-auto mb-4 leading-relaxed font-medium">
            Everything you need to know about our same-day repair process, $0 diagnostic fee, and written warranty.
          </p>
          <div class="w-20 h-1 bg-brandOrange mx-auto rounded-full"></div>
        </div>

        <div class="space-y-4">

          <!-- FAQ 1 -->
          <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs">
            <button onclick="toggleFAQ('faq-1')"
              class="w-full p-5 text-left font-heading font-bold text-brandDarkBlue text-sm sm:text-base flex justify-between items-center focus:outline-none">
              <span>How quickly can a technician arrive to fix my refrigerator in Toronto?</span>
              <span id="icon-faq-1" class="text-brandOrange font-black text-xl">+</span>
            </button>
            <div id="faq-1"
              class="hidden px-5 pb-5 text-xs sm:text-sm text-slate-700 leading-relaxed border-t border-slate-100 pt-3">
              We offer same-day refrigerator repair across Toronto and the GTA! When you call or submit an enquiry before 2:00 PM,
              our certified technician can arrive at your home within 2 to 4 hours. Daily emergency appointments are available to prevent food spoilage.
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs">
            <button onclick="toggleFAQ('faq-2')"
              class="w-full p-5 text-left font-heading font-bold text-brandDarkBlue text-sm sm:text-base flex justify-between items-center focus:outline-none">
              <span>What is your pricing model and diagnostic service call fee?</span>
              <span id="icon-faq-2" class="text-brandOrange font-black text-xl">+</span>
            </button>
            <div id="faq-2"
              class="hidden px-5 pb-5 text-xs sm:text-sm text-slate-700 leading-relaxed border-t border-slate-100 pt-3">
              We provide transparent upfront written quotes before any repair begins with zero hidden charges. The diagnostic service call fee is
              completely <strong class="text-slate-900">WAIVED ($0)</strong> when you proceed with the refrigerator repair!
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs">
            <button onclick="toggleFAQ('faq-3')"
              class="w-full p-5 text-left font-heading font-bold text-brandDarkBlue text-sm sm:text-base flex justify-between items-center focus:outline-none">
              <span>What warranty do you offer on refrigerator repairs?</span>
              <span id="icon-faq-3" class="text-brandOrange font-black text-xl">+</span>
            </button>
            <div id="faq-3"
              class="hidden px-5 pb-5 text-xs sm:text-sm text-slate-700 leading-relaxed border-t border-slate-100 pt-3">
              All refrigerator repairs performed by Appliance Repair Knights come with a comprehensive <strong
                class="text-slate-900">written warranty</strong> covering both genuine factory replacement parts and certified technician labour.
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs">
            <button onclick="toggleFAQ('faq-4')"
              class="w-full p-5 text-left font-heading font-bold text-brandDarkBlue text-sm sm:text-base flex justify-between items-center focus:outline-none">
              <span>Do you carry refrigerator replacement parts in your service vehicles?</span>
              <span id="icon-faq-4" class="text-brandOrange font-black text-xl">+</span>
            </button>
            <div id="faq-4"
              class="hidden px-5 pb-5 text-xs sm:text-sm text-slate-700 leading-relaxed border-t border-slate-100 pt-3">
              Yes! Our Toronto mobile vans are fully stocked with high-grade factory replacement parts for Samsung, LG, Whirlpool, Bosch, GE Appliances, KitchenAid, Frigidaire, Maytag, Sub-Zero and Miele (including evaporator fan motors, defrost thermostats, heaters, start relays, and water inlet valves) to complete over 85% of repairs on the spot.
            </div>
          </div>

          <!-- FAQ 5 -->
          <div class="bg-white rounded-2xl border border-slate-200 overflow-hidden shadow-xs">
            <button onclick="toggleFAQ('faq-5')"
              class="w-full p-5 text-left font-heading font-bold text-brandDarkBlue text-sm sm:text-base flex justify-between items-center focus:outline-none">
              <span>Do you service built-in, luxury, and smart French door refrigerators?</span>
              <span id="icon-faq-5" class="text-brandOrange font-black text-xl">+</span>
            </button>
            <div id="faq-5"
              class="hidden px-5 pb-5 text-xs sm:text-sm text-slate-700 leading-relaxed border-t border-slate-100 pt-3">
              Yes, our certified technicians are specialized in high-end built-in units (such as Sub-Zero, Thermador, and Miele) as well as modern smart inverter refrigerators with multi-zone cooling systems and electronic control modules.
            </div>
          </div>

          <!-- Minimalist CTA & Trust Line directly under FAQs -->
          <div class="mt-10 text-center space-y-3">
            <a href="tel:9057178905" onclick="trackGtmCall('post_faq')"
              class="gtm-ppc-call gtm-ppc-call-faq inline-flex items-center justify-center gap-2.5 bg-brandOrange hover:bg-brandOrangeHover text-white font-extrabold px-8 py-4 rounded-xl text-sm sm:text-base shadow-lg transition-all uppercase tracking-wide">
              <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                <path
                  d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                </path>
              </svg>
              <span>Still Have Questions? Call 905-717-8905</span>
            </a>
            <p class="text-xs text-slate-700 font-semibold flex items-center justify-center gap-2 flex-wrap">
              <span class="flex items-center gap-1"><svg class="w-3 h-3 text-brandOrange" fill="currentColor"
                  viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd"></path>
                </svg> $0 Service Call With Any Paid Repair</span>
              <span class="text-slate-400">•</span>
              <span class="flex items-center gap-1"><svg class="w-3 h-3 text-brandOrange" fill="currentColor"
                  viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd"></path>
                </svg> Speak Directly With a Technician</span>
              <span class="text-slate-400">•</span>
              <span class="flex items-center gap-1"><svg class="w-3 h-3 text-brandOrange" fill="currentColor"
                  viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                    clip-rule="evenodd"></path>
                </svg> Same-Day Availability</span>
            </p>
          </div>

        </div>
    </section>

    <!-- SECTION 4: OUR PROCESS - SIMPLE STEPS FROM BOOKING TO COMPLETION -->
    <section class="hidden py-16 bg-slate-50 border-b border-brandBorder" id="process">
      <div class="max-w-7xl mx-auto px-4 text-center">

        <div
          class="inline-flex items-center gap-1.5 text-brandOrange font-extrabold text-xs uppercase tracking-widest mb-2.5">
          <svg class="w-4 h-4 text-brandOrange" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z">
            </path>
          </svg>
          <span>EASY 4-STEP REPAIR</span>
        </div>
        <h2 class="text-2xl sm:text-3xl font-heading font-black text-brandDarkBlue uppercase tracking-tight mb-2">
          OUR SIMPLE 4-STEP PROCESS
        </h2>
        <p class="text-slate-700 text-xs sm:text-sm max-w-xl mx-auto mb-4 leading-relaxed font-medium">
          Fast and transparent 4-step repair process from instant booking to final testing.
        </p>
        <div class="w-20 h-1 bg-brandOrange mx-auto mb-12 rounded-full"></div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 relative">

          <!-- Step 1 -->
          <div
            class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm text-center relative flex flex-col items-center hover-lift">
            <div
              class="w-14 h-14 rounded-2xl bg-brandOrange text-white font-black text-xl flex items-center justify-center mb-4 shadow-md">
              1
            </div>
            <h3 class="font-heading font-bold text-brandDarkBlue text-base mb-2">1. Book or Call</h3>
            <p class="text-slate-700 text-xs sm:text-sm leading-relaxed">
              Submit our 1-minute form or call <a href="tel:9057178905" onclick="trackGtmCall('process_step1')"
                class="gtm-ppc-call gtm-ppc-call-step1 text-brandOrange hover:underline font-extrabold whitespace-nowrap">905-717-8905</a>.
              Our dispatch team confirms your slot in 15 mins.
            </p>
          </div>

          <!-- Step 2 -->
          <div
            class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm text-center relative flex flex-col items-center hover-lift">
            <div
              class="w-14 h-14 rounded-2xl bg-brandBlue text-white font-black text-xl flex items-center justify-center mb-4 shadow-md">
              2
            </div>
            <h3 class="font-heading font-bold text-brandDarkBlue text-base mb-2">2. Tech Arrival</h3>
            <p class="text-slate-700 text-xs sm:text-sm leading-relaxed">
              A licensed, local technician arrives at your door with a fully stocked service vehicle ready to repair.
            </p>
          </div>

          <!-- Step 3 -->
          <div
            class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm text-center relative flex flex-col items-center hover-lift">
            <div
              class="w-14 h-14 rounded-2xl bg-brandBlue text-white font-black text-xl flex items-center justify-center mb-4 shadow-md">
              3
            </div>
            <h3 class="font-heading font-bold text-brandDarkBlue text-base mb-2">3. Diagnosis & Quote</h3>
            <p class="text-slate-700 text-xs sm:text-sm leading-relaxed">
              We diagnose the issue and provide a clear, upfront quote before starting. $0 diagnostic fee with repair!
            </p>
          </div>

          <!-- Step 4 -->
          <div
            class="bg-white p-6 rounded-2xl border border-slate-200 shadow-sm text-center relative flex flex-col items-center hover-lift">
            <div
              class="w-14 h-14 rounded-2xl bg-emerald-600 text-white font-black text-xl flex items-center justify-center mb-4 shadow-md">
              4
            </div>
            <h3 class="font-heading font-bold text-brandDarkBlue text-base mb-2">4. Repair & Written Warranty</h3>
            <p class="text-slate-700 text-xs sm:text-sm leading-relaxed">
              Complete repair performed on-site with genuine high-quality replacement parts and a written parts & labor
              warranty.
            </p>
          </div>

        </div>

      </div>
    </section>

    <!-- SECTION 9: SECONDARY CALL-TO-ACTION CONVERSION POINT -->
    <section
      class="py-14 bg-gradient-to-r from-brandNavy via-brandDarkBlue to-brandBlue text-white relative overflow-hidden">
      <div
        class="max-w-7xl mx-auto px-4 text-center sm:text-left flex flex-col lg:flex-row items-center justify-between gap-8">

        <div>
          <span
            class="inline-flex items-center gap-1.5 bg-brandOrange text-white text-[10px] font-black uppercase px-3 py-1 rounded-md mb-2 tracking-wider">
            <span class="w-2 h-2 rounded-full bg-white animate-pulse"></span>
            <span>SAME-DAY SLOTS AVAILABLE TODAY</span>
          </span>
          <h2 id="bottom-cta-title"
            class="text-2xl sm:text-4xl font-heading font-black uppercase text-white tracking-tight">NEED YOUR REFRIGERATOR
            REPAIRED IN TORONTO TODAY?</h2>
          <p id="bottom-cta-desc" class="text-xs sm:text-sm text-slate-200 mt-2 max-w-xl">
            Don't let food spoil or laundry pile up. Call our local <?php echo htmlspecialchars($city_name); ?> dispatch team now for same-day arrival &amp; your $0 diagnostic quote!
          </p>
        </div>

        <div class="flex flex-wrap items-center justify-center gap-4 flex-shrink-0">
          <a href="tel:9057178905" onclick="trackGtmCall('cta_banner')"
            class="gtm-ppc-call gtm-ppc-call-banner bg-brandOrange hover:bg-brandOrangeHover text-white font-extrabold px-8 py-4 rounded-2xl text-base shadow-xl transition-all uppercase tracking-wider flex items-center gap-2">
            <svg class="w-5 h-5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
              <path
                d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
              </path>
            </svg>
            CALL DISPATCH: 905-717-8905
          </a>
          <a href="#ppc-quote-form"
            class="border-2 border-white/90 hover:bg-white hover:text-brandDarkBlue text-white font-extrabold px-7 py-4 rounded-2xl text-sm transition-all uppercase tracking-wider">
            CLAIM $0 DIAGNOSTIC ONLINE ↑
          </a>
        </div>

      </div>
    </section>

  </main>

  <!-- GOOGLE ADS COMPLIANT & MOBILE-FIRST FOOTER -->
  <footer class="bg-brandNavy text-slate-200 py-12 border-t border-slate-800 text-xs">
    <div class="max-w-7xl mx-auto px-4 space-y-8">

      <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

        <!-- Col 1: Brand & Contact Info -->
        <div class="space-y-3 md:col-span-1">
          <picture>
            <source srcset="../img/logo.webp" type="image/webp">
            <img src="../img/logo-opt.png" alt="Appliance Repair Knights Logo" width="180" height="44"
              class="h-11 w-auto object-contain" loading="lazy" decoding="async">
          </picture>
          <p class="text-slate-300 text-xs leading-relaxed">
            Appliance Repair Knights is your trusted local provider for fast, same-day home appliance repairs across
            Toronto, GTA & Southern Ontario.
          </p>
          <div class="pt-1 space-y-1.5 text-xs text-slate-200 font-medium">
            <p><strong>Dispatch:</strong> <a href="tel:9057178905" onclick="trackGtmCall('footer')"
                class="gtm-ppc-call gtm-ppc-call-footer text-amber-400 hover:text-white font-extrabold hover:underline">905-717-8905</a>
            </p>
            <p><strong>Email:</strong> <a href="mailto:info@appliancerepairknights.com"
                class="hover:text-white text-slate-200 font-medium">info@appliancerepairknights.com</a></p>
            <p><strong>Region:</strong> Toronto & GTA Service Zones</p>
          </div>
        </div>

        <!-- Col 2: Services List -->
        <div>
          <h4 class="font-heading font-extrabold text-amber-400 uppercase tracking-wider text-xs mb-3">
            REFRIGERATOR SERVICES</h4>
          <ul class="space-y-2 text-slate-300 text-xs font-medium">
            <li><a href="#services" class="hover:text-white transition-colors">Fridge Not Cooling Diagnostic</a></li>
            <li><a href="#services" class="hover:text-white transition-colors">Water Leak &amp; Drain Line Repair</a></li>
            <li><a href="#services" class="hover:text-white transition-colors">Ice Maker &amp; Dispenser Service</a></li>
            <li><a href="#services" class="hover:text-white transition-colors">Freezer Frost &amp; Defrost Repair</a></li>
            <li><a href="#services" class="hover:text-white transition-colors">Compressor &amp; Relay Replacement</a></li>
            <li><a href="#services" class="hover:text-white transition-colors">Built-In &amp; Sub-Zero Service</a></li>
          </ul>
        </div>

        <!-- Col 3: Service Hours & Dispatch Area -->
        <div>
          <h4 class="font-heading font-extrabold text-amber-400 uppercase tracking-wider text-xs mb-3">
            DISPATCH HOURS</h4>
          <ul class="space-y-2 text-slate-300 text-xs font-medium">
            <li class="flex justify-between border-b border-slate-800 pb-1">
              <span>Monday – Sunday:</span>
              <span class="text-white font-semibold">8:00 AM – 8:00 PM</span>
            </li>
            <li class="flex justify-between pt-1">
              <span class="text-emerald-400 font-bold">Emergency Dispatch:</span>
              <span class="text-emerald-400 font-bold">24/7 Available</span>
            </li>
          </ul>
        </div>

        <!-- Col 4: Legal, Policy & Disclaimers -->
        <div>
          <h4 class="font-heading font-extrabold text-amber-400 uppercase tracking-wider text-xs mb-3">
            LEGAL & POLICIES</h4>
          <ul class="space-y-2 text-slate-300 text-xs font-medium mb-4">
            <li><a href="../privacy-policy" target="_blank" class="hover:text-white transition-colors">Privacy
                Policy</a></li>
            <li><a href="../terms-and-conditions" target="_blank" class="hover:text-white transition-colors">Terms
                of Service</a></li>
            <li><a href="../disclaimer" target="_blank" class="hover:text-white transition-colors">Google Ads Policy
                Disclaimer</a></li>
          </ul>
        </div>

      </div>

      <!-- Google Ads & Third-Party Trademark Mandatory Compliance Footer Disclosure -->
      <div class="pt-6 border-t border-slate-800 text-[11px] text-slate-300 leading-relaxed space-y-2.5">
        <p>
          <strong class="text-slate-100 font-semibold">Third-Party Independent Service &amp; Trademark Disclosure:</strong> Appliance Repair Knights is an independent residential appliance service provider specializing in prompt, out-of-warranty appliance repairs across Toronto and the Greater Toronto Area. All brand names, trademarks, model designations, and logos referenced on this website (including Samsung, LG, Whirlpool, Bosch, GE, Frigidaire, KitchenAid, Maytag, Sub-Zero, Miele, and others) are the property of their respective trademark holders and are utilized strictly for identification and descriptive purposes to indicate parts and diagnostic repair compatibility. Appliance Repair Knights is not affiliated with, sponsored by, or endorsed by any of these original equipment manufacturers.
        </p>
        <p class="text-slate-400">
          Transparent, upfront written quotes are provided prior to starting any repair work. The diagnostic service call fee is completely waived when you proceed with repairs. All qualifying repairs are backed by our comprehensive written parts and labour warranty.
        </p>
        <div class="flex flex-col sm:flex-row justify-between items-center gap-2 pt-2 text-slate-400">
          <p>© 2026 Appliance Repair Knights. All Rights Reserved.</p>
          <div class="flex items-center gap-3">
            <a href="../privacy-policy" target="_blank" class="hover:text-white underline transition-colors">Privacy Policy</a>
            <span>•</span>
            <a href="../terms-and-conditions" target="_blank" class="hover:text-white underline transition-colors">Terms of Service</a>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <!-- STICKY MOBILE CALL (DOMINANT FOCUS), BOOKING & WHATSAPP BAR -->
  <div
    class="fixed bottom-0 left-0 right-0 z-50 bg-brandDarkBlue/95 backdrop-blur-md px-3 py-2.5 border-t border-brandBlue/40 flex items-center justify-between gap-2 md:hidden shadow-2xl">

    <!-- 1. WhatsApp Icon CTA (Left Side) -->
    <a id="whatsapp-mobile-btn"
      href="https://wa.me/19057178905?text=Hi%2C%20I%20need%20same-day%20refrigerator%20repair%20in%20Toronto"
      onclick="trackGtmWhatsApp('mobile_bar')" target="_blank" rel="noopener" aria-label="Chat on WhatsApp"
      class="gtm-ppc-whatsapp-mobilebar bg-emerald-600 hover:bg-emerald-700 text-white font-extrabold p-3 rounded-xl text-xs flex items-center justify-center shadow-md transition-all flex-shrink-0 active:scale-95">
      <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
        <path
          d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
      </svg>
    </a>

    <!-- 2. Secondary Booking Form CTA (Middle) -->
    <a href="#ppc-quote-form"
      class="gtm-ppc-lead-mobilebar bg-white/10 hover:bg-white/20 text-white border border-white/25 font-bold py-3 px-2.5 rounded-xl text-[10px] text-center uppercase tracking-tight shadow-xs transition-all flex items-center justify-center gap-1 flex-shrink-0">
      <svg class="w-3.5 h-3.5 text-amber-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
      </svg>
      <span class="whitespace-nowrap">BOOK</span>
    </a>

    <!-- 3. Dominant Phone Call CTA (No. 1 Right Position) -->
    <a href="tel:9057178905" onclick="trackGtmCall('mobile_bar')"
      class="gtm-ppc-call gtm-ppc-call-mobilebar flex-grow bg-brandOrange hover:bg-brandOrangeHover text-white font-extrabold py-3 px-3.5 rounded-xl text-xs sm:text-sm text-center uppercase tracking-wide shadow-[0_4px_18px_rgba(255,107,0,0.5)] flex items-center justify-center gap-2 transition-all active:scale-95">
      <svg class="w-5 h-5 text-white flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
        <path
          d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
        </path>
      </svg>
      <span class="whitespace-nowrap font-black text-xs">CALL 905-717-8905</span>
    </a>
  </div>

  <!-- Form Interactivity, Dynamic Service Personalization & FAQ Accordion Handler Script -->
  <script>
    // Initialize GTM dataLayer
    window.dataLayer = window.dataLayer || [];

    // GTM PPC Conversion Trackers (Directly mapped to GTM-M7B6FLPR Container Rules)
    function trackGtmCall(location) {
      if (typeof loadGTM === 'function') loadGTM();
      window.dataLayer = window.dataLayer || [];
      // 1. Tag 2: GA4 Event 'click_phone_ppc' (with parameter button_location)
      window.dataLayer.push({
        'event': 'click_phone_ppc',
        'button_location': location,
        'click_location': location,
        'value': 1
      });
      // 2. Fallback event for custom PPC triggers
      window.dataLayer.push({
        'event': 'ppc_phone_click',
        'click_location': location,
        'value': 1
      });
    }

    function trackGtmWhatsApp(location) {
      if (typeof loadGTM === 'function') loadGTM();
      window.dataLayer = window.dataLayer || [];
      window.dataLayer.push({
        'event': 'ppc_whatsapp_click',
        'click_location': location,
        'value': 1
      });
    }

    function trackGtmFormSuccess(appliance, city) {
      if (typeof loadGTM === 'function') loadGTM();
      window.dataLayer = window.dataLayer || [];
      // Rule 3: Triggers Tag 8 (Google Ads Conversion m_1yCPydo-AcEKz_-utD) and Tag 3 (GA4 generate_lead)
      window.dataLayer.push({
        'event': 'ppc_form_success',
        'appliance': appliance,
        'city': city,
        'value': 1
      });
      // GA4 standard recommended lead event
      window.dataLayer.push({
        'event': 'generate_lead',
        'service': appliance,
        'city': city,
        'value': 1
      });
    }

    // Server-side backend (send-lead.php) handles secure Google Sheet & Email dispatch
    const GOOGLE_SHEET_SCRIPT_URL = "";

    async function handlePPCFormSubmit() {
      const name = document.getElementById('ppc-name').value.trim();
      const phone = document.getElementById('ppc-phone').value.trim();
      const email = document.getElementById('ppc-email').value.trim();
      const city = document.getElementById('ppc-city').value;
      const appliance = document.getElementById('ppc-appliance').value;
      const submitBtn = document.querySelector('.gtm-ppc-btn-submit');

      if (!name || !phone) {
        alert('Please fill in your Name and Phone Number.');
        return;
      }

      // Show loading indicator on submit button
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = `
          <svg class="animate-spin h-5 w-5 text-white inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
          </svg>
          <span>SENDING REQUEST...</span>
        `;
      }

      const payload = {
        name: name,
        phone: phone,
        email: email,
        city: city,
        appliance: appliance,
        page: '<?php echo htmlspecialchars($page_identifier); ?>'
      };

      try {
        // 1. Post to Hostinger PHP Endpoint (send-lead.php)
        const phpPromise = fetch('send-lead.php', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(payload)
        }).catch(err => console.log('PHP endpoint notice:', err));

        // 2. Post to Google Apps Script Web App Endpoint (Optional client fallback)
        let sheetPromise = Promise.resolve();
        if (GOOGLE_SHEET_SCRIPT_URL && !GOOGLE_SHEET_SCRIPT_URL.includes('YOUR_SCRIPT_ID')) {
          sheetPromise = fetch(GOOGLE_SHEET_SCRIPT_URL, {
            method: 'POST',
            mode: 'no-cors',
            headers: { 'Content-Type': 'text/plain' },
            body: JSON.stringify(payload)
          }).catch(err => console.log('GSheet endpoint notice:', err));
        }

        await Promise.allSettled([phpPromise, sheetPromise]);

      } catch (error) {
        console.error('Submission error:', error);
      } finally {
        // Track GTM Form Conversion Event
        trackGtmFormSuccess(appliance, city);

        // Display Success View
        document.getElementById('display-user-phone').innerText = phone || 'your number';
        document.getElementById('ppc-lead-form').classList.add('hidden');
        document.getElementById('ppc-success').classList.remove('hidden');
      }
    }

    function toggleFAQ(faqId) {
      const content = document.getElementById(faqId);
      const icon = document.getElementById('icon-' + faqId);

      if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        icon.innerText = '−';
      } else {
        content.classList.add('hidden');
        icon.innerText = '+';
      }
    }

    // Professional Unified Review Slider Controller
    let currentReviewSlide = 0;
    let reviewTimer = null;

    function getMaxReviewSlides() {
      const cards = document.querySelectorAll('.review-slide-card');
      const total = cards.length || 12;
      return window.innerWidth >= 768 ? Math.max(0, total - 3) : Math.max(0, total - 1);
    }

    function updateReviewSlider() {
      const track = document.getElementById('review-slider-track');
      const dots = document.querySelectorAll('.review-dot');
      const maxSlides = getMaxReviewSlides();

      // Clamp current slide index
      if (currentReviewSlide > maxSlides) {
        currentReviewSlide = maxSlides;
      }
      if (currentReviewSlide < 0) {
        currentReviewSlide = 0;
      }

      const isDesktop = window.innerWidth >= 768;
      const slideStepPercent = isDesktop ? (100 / 3) : 100;

      if (track) {
        track.style.transform = `translateX(-${currentReviewSlide * slideStepPercent}%)`;
      }

      // Update Dots UI
      dots.forEach((dot, index) => {
        if (index === currentReviewSlide) {
          dot.classList.remove('bg-slate-300', 'w-2');
          dot.classList.add('bg-brandOrange', 'w-6');
        } else {
          dot.classList.remove('bg-brandOrange', 'w-6');
          dot.classList.add('bg-slate-300', 'w-2');
        }
      });
    }

    function goToReviewSlide(index) {
      currentReviewSlide = index;
      updateReviewSlider();
      resetReviewTimer();
    }

    function nextReviewSlide() {
      const maxSlides = getMaxReviewSlides();
      currentReviewSlide = (currentReviewSlide + 1) > maxSlides ? 0 : currentReviewSlide + 1;
      updateReviewSlider();
      resetReviewTimer();
    }

    function prevReviewSlide() {
      const maxSlides = getMaxReviewSlides();
      currentReviewSlide = (currentReviewSlide - 1) < 0 ? maxSlides : currentReviewSlide - 1;
      updateReviewSlider();
      resetReviewTimer();
    }

    function startReviewTimer() {
      reviewTimer = setInterval(nextReviewSlide, 5000);
    }

    function resetReviewTimer() {
      if (reviewTimer) clearInterval(reviewTimer);
      startReviewTimer();
    }

    // Touch Swipe Gestures & Resize Bindings
    document.addEventListener('DOMContentLoaded', () => {
      startReviewTimer();
      updateReviewSlider();

      const track = document.getElementById('review-slider-track');
      if (track) {
        let touchStartX = 0;
        let touchEndX = 0;

        track.addEventListener('touchstart', (e) => {
          touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });

        track.addEventListener('touchend', (e) => {
          touchEndX = e.changedTouches[0].screenX;
          if (touchStartX - touchEndX > 45) {
            nextReviewSlide();
          } else if (touchEndX - touchStartX > 45) {
            prevReviewSlide();
          }
        }, { passive: true });
      }

      window.addEventListener('resize', () => {
        updateReviewSlider();
      });
    });
  </script>

</body>

</html>