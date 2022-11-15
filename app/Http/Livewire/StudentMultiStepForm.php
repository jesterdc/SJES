<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\StudentRequest;


class StudentMultiStepForm extends Component
{
    public function render()
    {
        return view('livewire.student-multi-step-form');
    }

    public $first_name;
    public $middle_name;
    public $last_name;
    public $gender;
    public $email;
    public $contact;
    public $address;
    public $lrn;
    public $document;
    public $birthday;
    public $terms;
    public $full_name;

    public $totalSteps = 4;
    public $currentStep = 1;

    public function mount()
    {
        $this->currentStep = 1;
    }


    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
         $this->currentStep++;
         if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
         }
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }


    public function validateData(){

        if($this->currentStep == 1){
            $this->validate([
                'first_name'=>'required|regex:/^[\pL\s\-]+$/u|max:46',
                'middle_name'=>'required|regex:/^[\pL\s\-]+$/u|max:46',
                'last_name'=>'required|regex:/^[\pL\s\-]+$/u|max:46',
                'gender'=>'required',
                'birthday'=>'required',
                'terms'=>'accepted'
            ]);
        }
        elseif($this->currentStep == 2){
              $this->validate([
                'email'=>'required|email|max:62',
                'contact'=>'required|integer',
                'address'=>'required|string|max:255'
              ]);
        }
        elseif($this->currentStep == 3){
              $this->validate([
                'lrn'=>'required|max:72',
                'document'=>'required'
              ]);
        }
    }

    
    public function register(){
        $this->resetErrorBag();
        if($this->currentStep == 4){
            $full_name = 'first_name'.''.'middle_name'.''.'last_name'; 
        
        }


        function generate(){
            $prefix = 'REQ';
            $random = rand(1000000,9999);
            $year = Carbon::now()->format('Y'); // 2021
            $final = $prefix .'-'.$random.'-'.$year;


            if(StudentRequest::where('tracking_number', '=', $final)->exists()){
                $tracking_no = $final+1;
                return $tracking_no;
            }

            else {
                return $final;
            }
        }

        function pin_generate(){
            $pin = rand(1000,9999);

            return $pin;
        }

        $pin = pin_generate();
        $tracking_number = generate();

        $values = array(
            "first_name"=>$this->first_name,
            "middle_name"=>$this->middle_name,
            "last_name"=>$this->last_name,
            "gender"=>$this->gender,
            "email"=>$this->email,
            "contact"=>$this->contact,
            "address"=>$this->address,
            "lrn"=>$this->lrn,
            "document"=>$this->document,
            "birthday"=>$this->birthday,
            "created_at"=>Carbon::now(),
            "tracking_number"=>$tracking_number,
            "pin"=>$pin
        );


        StudentRequest::insert($values);
        $data= $tracking_number;
        $name= $this->first_name;
        $p = $pin;
        return redirect()->route('request-sucess',['name'=> $name,'number'=>$data, 'pin'=>$p]);

        
    }
}
