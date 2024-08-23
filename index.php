<?php
// Define the CV data array
$data = [
    "name" => "Ahmed Gamal",
    "age" => 20,
    'contact' => [
        "email" => "Ahmedgamal@gmail.com",
        "phone" => '01205297854',
        "address" => "7 ST Tahrer, Cario",
    ],
    'profile' => 'A motivated individual with a passion for software development',
    'education' => [
        [
        'degree' => 'Bachelor of Commerce',
        'Collage' => 'Zagazig UN',
        'from_date' => 'september 2022',
        'to_date' => 'SEP 2026',
        'description' => 'Focused on software development, data structures, and algorithms.'
    ]
  ],
  // am not working until yet but for ex:
  'work_experience' => [
    [
    'name' => 'HOLA Page',
    'from_date' => '20-12-2023',
    'to_date' => 'until yet',
     'description_role' => 'Worked as a software developer, creating web applications and services.',
    ],
  [
    'name' => 'Tech Innovators',
            'from_date' => '1-9-2021',
            'to_date' => '11-4-2022',
            'description_role' => 'Assisted in developing mobile applications and improving UX/UI designs.'
  ]
  ],

  'internships' => [
    [
        'name' => 'Startup GO',
        'from_date' => '1-6-2022',
        'to_date' => '31-8-2022',
        'description_role' => 'Worked on front-end development using HTML, CSS, and PHP.'
    ]
],

'skills' => ['PHP', 'HTML', 'CSS', 'SQL', 'Git', 'C++', 'C', 'MVC'],
'languages' => ['English', 'Arabic', 'German']
];

// Start HTML output
echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahmed Gamal\'s CV</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background-color: #f0f8ff; }
        h1 { color: #ffffff; background-color: #008080; padding: 10px; border-radius: 8px; }
        h2 { color: #ffffff; background-color: #5f9ea0; padding: 8px; border-radius: 6px; }
        .section { margin-bottom: 20px; background-color: #e0ffff; padding: 10px; border-radius: 10px; }
        .job, .internship, .education { margin-bottom: 15px; padding: 8px; background-color: #fafad2; border-radius: 6px; }
        .job-title, .internship-title { font-weight: bold; color: #2e8b57; }
        .degree { font-weight: bold; color: #4682b4; }
        .date { color: #696969; font-size: 0.9em; }
        ul { padding-left: 20px; }
        li { color: #8b0000; }
        p { margin: 5px 0; }
        .skills, .languages { background-color: #ffffe0; padding: 10px; border-radius: 10px; }
    </style>
</head>
<body>';

// Display Personal Information in a section
echo '<div class="section">';
echo '<h1>' . $data['name'] . '</h1>';
echo '<p>' . $data['age'] . ' years old</p>';
echo '<p>' . $data['contact']['email'] . ' | ' . $data['contact']['phone'] . '</p>';
echo '<p>' . $data['contact']['address'] . '</p>';
echo '<p>' . $data['profile'] . '</p>';
echo '</div>';

// Display Education
echo '<div class="section">';
echo '<h2>Education</h2>';
foreach ($data['education'] as $education) {
    echo '<div class="education">';
    echo '<p class="degree">' . $education['degree'] . ' - ' . $education['Collage'] . '</p>';
    echo '<p class="date">' . $education['from_date'] . ' - ' . $education['to_date'] . '</p>';
    echo '<p>' . $education['description'] . '</p>';
    echo '</div>';
}
echo '</div>';

// Display Work Experience
echo '<div class="section">';
echo '<h2>Work Experience</h2>';
foreach ($data['work_experience'] as $job) {
    echo '<div class="job">';
    echo '<p class="job-title">' . $job['name'] . '</p>';
    echo '<p class="date">' . $job['from_date'] . ' - ' . $job['to_date'] . '</p>';
    echo '<p>' . $job['description_role'] . '</p>';
    echo '</div>';
}
echo '</div>';

// Display Internships
echo '<div class="section">';
echo '<h2>Internships</h2>';
foreach ($data['internships'] as $internship) {
    echo '<div class="internship">';
    echo '<p class="internship-title">' . $internship['name'] . '</p>';
    echo '<p class="date">' . $internship['from_date'] . ' - ' . $internship['to_date'] . '</p>';
    echo '<p>' . $internship['description_role'] . '</p>';
    echo '</div>';
}
echo '</div>';

// Display Skills
echo '<div class="section skills">';
echo '<h2>Skills</h2>';
echo '<ul>';
foreach ($data['skills'] as $skill) {
    echo '<li>' . $skill . '</li>';
}
echo '</ul>';
echo '</div>';

// Display Languages
echo '<div class="section languages">';
echo '<h2>Languages</h2>';
echo '<ul>';
foreach ($data['languages'] as $language) {
    echo '<li>' . $language . '</li>';
}
echo '</ul>';
echo '</div>';

