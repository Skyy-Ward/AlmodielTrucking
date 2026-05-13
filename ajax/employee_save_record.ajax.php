<?php
require_once "../controllers/employee.controller.php";
require_once "../models/employee.model.php";

class EmployeeRegistration {
  public $empFName;
  public $empLName;
  public $empMI;
  public $empSuffix;
  public $empBirthDate;
  public $empPhoneNumber;
  public $empEmail;
  public $empType;
  public $empPassword;
  public $empStatus = 'active'; // auto set on registration

  public function saveEmployee() {
    $data = array(
      "empFName"       => $this->empFName,
      "empLName"       => $this->empLName,
      "empMI"          => $this->empMI,
      "empSuffix"      => $this->empSuffix,
      "empBirthDate"   => $this->empBirthDate,
      "empPhoneNumber" => $this->empPhoneNumber,
      "empEmail"       => $this->empEmail,
      "empType"        => $this->empType,
      "empPassword"    => password_hash($this->empPassword, PASSWORD_DEFAULT),
      "empStatus"      => $this->empStatus,
    );

    $answer = (new ControllerEmployee)->ctrSaveEmployee($data);
    echo $answer;
  }
}

$save_employee = new EmployeeRegistration();

$save_employee->empFName       = $_POST["empFName"];
$save_employee->empLName       = $_POST["empLName"];
$save_employee->empMI          = $_POST["empMI"];
$save_employee->empSuffix      = $_POST["empSuffix"];
$save_employee->empBirthDate   = $_POST["empBirthDate"];
$save_employee->empPhoneNumber = $_POST["empPhoneNumber"];
$save_employee->empEmail       = $_POST["empEmail"];
$save_employee->empType        = $_POST["empType"];
$save_employee->empPassword    = $_POST["empPassword"];

$save_employee->saveEmployee();