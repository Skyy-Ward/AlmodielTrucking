<?php
class ControllerEmployee{
	static public function ctrSaveEmployee($data){
	  $answer = (new ModelEmployee)->mdlSaveEmployee($data);
		return $answer;
	}

	// static public function ctrEditClinicStaff($data){
	//   $answer = (new ModelClinicStaff)->mdlEditClinicStaff($data);
	// }

    // static public function ctrClinicStaffList() {
    //     $answer = (new ModelClinicStaff) -> mdlClinicStaffList();
    //     return $answer;
    // }

    // static public function ctrSearchClinicStaff($empid) {
    //     $answer = (new ModelClinicStaff) -> mdlSearchClinicStaff($empid);
    //     return $answer;
    // }
}