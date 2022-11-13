<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\EmployeeRequest;

class EmployeeMultiStepForm extends Component
{

    public $first_name;
    public $middle_name;
    public $last_name;
    public $gender;
    public $email;
    public $contact;
    public $address;
    public $employee_id;
    public $birthday;
    public $terms;

    public $totalSteps = 4;
    public $currentStep = 1;

    public function mount()
    {
        $this->currentStep = 1;
    }

    public function render()
    {
        return view('livewire.employee-multi-step-form');
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
                'first_name'=>'required|string',
                'middle_name'=>'required|string',
                'last_name'=>'required|string',
                'gender'=>'required'
            ]);
        }
        elseif($this->currentStep == 2){
              $this->validate([
                 'email'=>'required|email',
                 'contact'=>'required',
                 'address'=>'required'
              ]);
        }
        elseif($this->currentStep == 3){
              $this->validate([
                'employee_id'=>'required'
              ]);
        }
    }

    
    public function register(){
        $this->resetErrorBag();
        if($this->currentStep == 4){
            $this->validate([
                'birthday'=>'required',
                'terms'=>'accepted'
            ]);
        }

        $values = array(
            "first_name"=>$this->first_name,
            "middle_name"=>$this->middle_name,
            "last_name"=>$this->last_name,
            "gender"=>$this->gender,
            "email"=>$this->email,
            "contact"=>$this->contact,
            "address"=>$this->address,
            "employee_id"=>$this->employee_id,
            "birthday"=>$this->birthday
        );


        EmployeeRequest::insert($values);
        //   $this->reset();
        //   $this->currentStep = 1;
        $data = ['name'=>$this->first_name];
        return redirect()->route('request-sucess', $data);
    

        
    }



}


// 'name' => $this['name'],
// 'middle_name' => $this['middle_name'],
// 'last_name' => $this['last_name'],
// 'gender' => $this['gender'],
// 'email' => $this['email'],
// 'contact' => $this['contact'],
// 'address' => $this['address'],
// 'employee_id' => $this['employee_id'],
// 'birthday' => $this['birthday'],