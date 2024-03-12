<?php
include("database/database.php");
include("photoupload.php");
include("insert.php");
$errors = [];

try {
    if (isset($_POST['report_form'])) {

        // Validation
        if (empty($_POST['name'])) {
            $errors['name'] = "Please give a valid name.";
            // throw new Exception("Please give a valid name.", 1);
        }

        if (empty($_POST['email'])) {
            $errors['email'] = "Please give an email address.";
        }

        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Please give a valid email.";
        }

        if (empty($_POST['reporters_adress'])) {
            $errors['reporters_adress'] = "Please enter the reporters adress.";
        }

        if (empty($_POST['incident_type'])) {
            $errors['incident_type'] = "Please enter incident type.";
        }
        if (empty($_POST['incident_location'])) {
            $errors['incident_location'] = 'incident location is required';
        }
        if (empty($_POST['affected_people'])) {
            $errors['affected_people'] = 'affected victim';
        }
        if (empty($_POST['incident_date'])) {
            $errors['incident_date'] = 'incident date is required';
        }
        if (empty($_POST['reporter_phone_number'])) {
            $errors['reporter_phone_number'] = 'reporter phone number is required';
        }
        if (empty($_POST['description'])) {
            $errors['description'] = 'description is required';
        }
      
      
    }
} catch (\Exception $e) {
    $errors['global'] = $e->getMessage();
}

if (count($errors) > 0) {
    $err_global = "Failed to submit form. Please try again.";

    if (isset($errors['global'])) {
        $err_global .= ' Error: ' .$errors['global'];
    }

    $errors['global'] = $err_global;
} else {
    if (isset($_POST['report_form'])) {
        // Sanitization
        $insert_data = [
      $name = 'name' => htmlspecialchars($_POST['name']),
            $email = 'email' => filter_var($_POST['email'], FILTER_VALIDATE_EMAIL),
           $reporter_phone =  'reporter_phone_number' => htmlspecialchars($_POST['reporter_phone_number']),
           $reporter_adress =  'reporters_adress'       => htmlspecialchars($_POST['reporters_adress']),
           $incident_type =  'incident_type' => htmlspecialchars($_POST['incident_type']),
           $incident_location =  'incident_location' => htmlspecialchars($_POST['incident_location']),
           $affected_people =  'affected_people' => htmlspecialchars($_POST['affected_people']),
           $incident_date =  'incident_date' => htmlspecialchars($_POST['incident_date']),
           $description = 'description' => htmlspecialchars($_POST['description']),
           $witness = 'witness'=>htmlspecialchars($_POST['witness']),
           $adress = 'w_house'=>htmlspecialchars($_POST['w_house']),
          $witness_phone =  'witnessphonenumber' => htmlspecialchars($_POST['witnessphonenumber']),
            // 'attachment'    => $file_name
        ];
        // var_dump($insert_data);

        // Insert into Database

    }
}

?>
