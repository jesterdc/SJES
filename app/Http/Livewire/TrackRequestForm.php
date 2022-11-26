<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EmployeeRequest;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isTrue;

use Symfony\Component\Console\Input\Input;

class TrackRequestForm extends Component
{

    public $tracking_num;
    public $pin;
    
    public function render()
    {
        return view('livewire.track-request-form');
    }


    public function submit(){
        $this->validate([
            'tracking_num'=>'required',
            'pin'=>'required|integer'
          ]);

        

        $values = trim($this->tracking_num);
        $u_pin = trim($this->pin);


        //GET TRANSACTION NUMBER AND PIN FROM DATABASE (EMPLOYEE REQUESTS TABLE)
        $employee_tr_list = DB::table('employee_requests')->pluck('tracking_number');
        $employee_pin_list = DB::table('employee_requests')->pluck('pin');

        //GET TRANSACTION NUMBER AND PIN FROM DATABASE (STUDENT REQUESTS TABLE)
        $student_tr_list = DB::table('student_requests')->pluck('tracking_number');
        $student_pin_list = DB::table('student_requests')->pluck('pin');



        //CONVERT THE TRANSACTION NUMBER AND PIN INTO JSON (FOR EMPLOYEES)
        $json = json_encode($employee_tr_list);
        $pin_json = json_encode($employee_pin_list);


        //CONVERT THE TRANSACTION NUMBER AND PIN INTO JSON (FOR STUDENTS)
        $st_json = json_encode($student_tr_list);
        $st_pin_json = json_encode($student_pin_list);  
      

        //CHECK IF THE USER INPUT MATCHES WITH TRANSACTION NUMBER AND PIN IN THE EMPLOYEE REQUEST TABLE
        if(preg_match("/{$values}/i", $json) && preg_match("/{$u_pin}/i", $pin_json)){
            
            $db_pin = DB::table('employee_requests')->where('pin', $u_pin)->value('status');
            $db_name = DB::table('employee_requests')->where('pin', $u_pin)->value('first_name');
            $db_tr = DB::table('employee_requests')->where('pin', $u_pin)->value('tracking_number');


            if($db_pin==0){
                $tr = $db_tr;
                $status = 'Awaiting for approval';
                $p = $u_pin;
                $n = $db_name;
                return redirect()->route('request.status',['number'=>$tr, 'pin'=>$p, 'name'=>$n, 'status'=>$status]);
            }

            elseif($db_pin==1){
                $tr = $db_tr;
                $status = 'Approved and being process';
                $p = $u_pin;
                $n = $db_name;
                return redirect()->route('request.status',['number'=>$tr, 'pin'=>$p, 'name'=>$n, 'status'=>$status]);
            }

            elseif($db_pin==2){
                $tr = $db_tr;
                $status = 'Ready to pickup';
                $p = $u_pin;
                $n = $db_name;
                return redirect()->route('request.status',['number'=>$tr, 'pin'=>$p, 'name'=>$n, 'status'=>$status]);
            }

         }



         //CHECK IF THE USER INPUT MATCHES WITH TRANSACTION NUMBER AND PIN IN THE STUDENT REQUEST TABLE
         elseif(preg_match("/{$values}/i", $st_json) && preg_match("/{$u_pin}/i", $st_pin_json)){


            $db_pin = DB::table('student_requests')->where('pin', $u_pin)->value('status');
            $db_name = DB::table('student_requests')->where('pin', $u_pin)->value('first_name');
            $db_tr = DB::table('student_requests')->where('pin', $u_pin)->value('tracking_number');


            if($db_pin==0){
                $tr = $db_tr;
                $status = 'Awaiting for approval';
                $p = $u_pin;
                $n = $db_name;
                return redirect()->route('request.status',['number'=>$tr, 'pin'=>$p, 'name'=>$n, 'status'=>$status]);
            }

            elseif($db_pin==1){
                $tr = $db_tr;
                $status = 'Approved and being process';
                $p = $u_pin;
                $n = $db_name;
                return redirect()->route('request.status',['number'=>$tr, 'pin'=>$p, 'name'=>$n, 'status'=>$status]);
            }

            elseif($db_pin==2){
                $tr = $db_tr;
                $status = 'Ready to pickup';
                $p = $u_pin;
                $n = $db_name;
                return redirect()->route('request.status',['number'=>$tr, 'pin'=>$p, 'name'=>$n, 'status'=>$status]);
            }
                
         }
    
        else{
            return redirect()->back()->with('message', 'Information not found! Please check if your transaction number and pin is correct.');
        }
    

       




    }
}
