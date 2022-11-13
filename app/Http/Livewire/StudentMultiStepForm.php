<?php

namespace App\Http\Livewire;

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
    public $birthday;
    public $terms;

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
                'lrn'=>'required'
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
            "lrn"=>$this->lrn,
            "birthday"=>$this->birthday
        );


        StudentRequest::insert($values);
        //   $this->reset();
        //   $this->currentStep = 1;
        $data = ['name'=>$this->first_name];
        return redirect()->route('request-sucess', $data);
    

        
    }
}
