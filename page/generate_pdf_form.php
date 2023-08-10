<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Barangay Clearance</title>
   <style>
      /* Add your CSS styling here */
      body {
         font-family: Arial, sans-serif;
      }
      .header {
         text-align: center;
         margin-bottom: 20px;
      }
      .logo {
         width: 100px;
         height: 100px;
      }
      .content {
         margin: 20px;
      }
      /* ... Add more styling as needed ... */
      .bold {
         font-weight: bold;
      }
   </style>
</head>
<body>
   <div class="header">
      
   <img src="<?= $logoImagePath ?>" alt="Logo" class="logo logo-left" />
   <div>
         <p>Republic of the Philippines</p>
         <p>Region VII</p>
         <p>Province of <?= $brgysettings_data->province ?></p>
         <p>Municipality of <?= $brgysettings_data->municipality ?></p>
      </div> 
      <p class="bold">Barangay <?= $brgysettings_data->barangay ?></p>
      <hr class="header-line">
     
      <h2>Barangay Clearance</h2>
      

   </div>

   <div class="content">
      <p class="bold">Date Issued: <?= date('Y-m-d') ?></p>
      <p>TO WHOM IT MAY CONCERN:</p>

      <p>This is to certify that <span class="bold"><?= $brgyclearance_data->applicant_name ?></span>, <span class="bold"><?= $brgyclearance_data->age ?> years old</span>, <span class="bold"><?= $brgyclearance_data->sex ?></span>, <span class="bold"><?= $brgyclearance_data->civil_status ?></span>with residence and postal address at Barangay <span class="bold"><?= $brgysettings_data->barangay ?></span>,<span class="bold"><?= $brgysettings_data->municipality ?></span>, <span class="bold"><?= $brgysettings_data->province ?></span>, 
      has no derogatory record filed in our Barangay Office.</p>

      <p>The above mentioned individual who is a bonafide resident of this barangay, a person of good character , peace-loving and civic minded-citizen. </p>

      <p>This certification/clearance is hereby issued in connectionto <span class="bold"><?= $brgyclearance_data->applicant_name ?></span> for the purpose of <span class="bold"><?= $brgyclearance_data->purpose ?></span> and is valid until <span class="bold"><?= date('Y-m-d', strtotime($brgyclearance_data->expiry_date)) ?></span>.</p>

      <p>Given this <span class="bold"><?= date('Y-m-d') ?></span>, Barangay <span class="bold"><?= $brgysettings_data->barangay?></span>, <span class="bold"><?= $brgyclearance_data->city_municipality ?></span>, Philippines.</p>

      <p><span class="bold">_______________________</span></p>
      <p><span class="bold">Barangay Chairman</span></p>

      <hr>

      <p>*** For Barangay Use Only ***</p>
      <p>Control Number: [Control Number]</p>
      <p>Date Processed: [Date Processed]</p>
      <p>Processed By: [Name of Barangay Personnel]</p>
   </div>
</body>
</html>
