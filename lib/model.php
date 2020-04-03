<?php

// --- model class loads and saves data from store

class Model
{
      static private $pathways =
      [
          'SE' => 'Software Engineer',
          'NE' => 'Network Engineer',
          'DA' => 'Data Analyst',
          'ALL' => 'All Pathways'
      ];

      static private $modules =
      [
        'QAB020C101' => 'Managing and Leading',
        'QAB020C102' => 'Finance and Accounting for Non-specialists',
        'QAB020C103' => 'Decision Making: Data Analytics and Conceptual Thinking',
        'QAB020N203' => 'Leadership in the Digital Age',
        'QAB020N204' => 'Managing Creativity, Innovation and Change',
        'QAB020X302' => 'Organisational Foresight, Digital Business and New Technologies',
        'QAB020X303' => 'Selling and Marketing',
        'QAC020C101' => 'Understanding Systems Development',
        'QAC020C102' => 'Work Based Portfolio',
        'QAC020C103' => 'IT Project Management',
        'QAC020C104' => 'Object Oriented Programming',
        'QAC020C105' => 'Systems Analysis and Design',
        'QAC020C106' => 'Test Driven Development',
        'QAC020C107' => 'Data Modelling and SQL Language',
        'QAC020C108' => 'Web Application Development',
        'QAC020C110' => 'Data Communications and Network Security',
        'QAC020C111' => 'IT Security Principles',
        'QAC020C112' => 'Service Management',
        'QAC020C113' => 'IP-Based Network Switching Systems',
        'QAC020C114' => 'Windows Servers',
        'QAC020C115' => 'Maths and Algorithms',
        'QAC020C116' => 'Introduction to Programming',
        'QAC020C117' => 'Professional Practice 1',
        'QAC020C118' => 'Cisco Certified Network Associate',
        'QAC020N201' => 'Business Strategy',
        'QAC010N202' => 'QAC010N202',
        'QAC030N203' => 'Solution Architecture',
        'QAC020N205' => 'Web and Mobile Development',
        'QAC020N206' => 'User Experience Design',
        'QAC020N207' => 'Big Data and Analytics',
        'QAC020N208' => 'Agile Performance Testing',
        'QAC020N209' => 'Servers, Storage and Virtualisation',
        'QAC020N210' => 'Service Strategy and Continuous Improvement',
        'QAC020N211' => 'Supporting and Planning for BYOD BYOA',
        'QAC020N212' => 'Network Design and Troubleshooting',
        'QAC020N213' => 'Multi-Vendor Unix Systems',
        'QAC020N214' => 'Migrating to Cloud and Hybrid Infrastructures',
        'QAC020N215' => 'Web Application Security',
        'QAC020N216' => 'Business Analysis',
        'QAC020N217' => 'Professional Practice 2',
        'QAC020N218' => 'Cisco Certified Network Professional',
        'QAC020X303' => 'Data Science',
        'QAC020X304' => 'Designing and Developing Products for the Internet of Things',
        'QAC020X305' => 'Planning and Implementing a DevOps Function',
        'QAC020X306' => 'Configuring & Managing Apache Servers',
        'QAC020X307' => 'Business Continuity and Disaster Recovery',
        'QAC020X308' => 'QAC020X308',
        'QAC020X309' => 'Unified Communications',
        'QAC020X310' => 'Artificial Intelligence and Machine Learning',
        'QAC020X311' => 'Software Defined Networking',
        'QAC020X312' => 'Functional Programming',
        'QAC020X315' => 'Developing Technology Strategy',
        'QAC020X316' => 'Consulting',
        'QAC020X317' => 'Professional Practice 3',
        'QAC040X320' => 'Major Project'
      ];

?>
