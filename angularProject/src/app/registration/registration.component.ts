import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-registration',
  templateUrl: './registration.component.html',
  styleUrls: ['./registration.component.css']
})
export class RegistrationComponent implements OnInit {


  firstname: string;
  lastname: string;
  barangay: string;
  municipality: string;
  city: string;
  region: string;
  phonenumber: string;
  emailaddress: string;

  toPass: any[]=[

  ];


  
  constructor() { }
  
  onSubmit(sampleForm) {
    var data = {
      firstname: this.firstname,
      lastname: this.lastname,
      barangay: this.barangay,
      municipality: this.municipality,
      city: this.city,
      region: this.region,
      phonenumber: this.phonenumber,
      emailaddress: this.emailaddress};
    this.toPass.push(data);
    sampleForm.form.reset()
    // this.firstname ='';
    // this.lastname ='';
    // this.barangay ='';
    // this.municipality ='';
    // this.city ='';
    // this.region ='';
    // this.phonenumber ='';
  }

  // fromChild() {
  //   this.fullname - ;
    
  // }

  onEdit(data: any) {
    if (this.firstname === null){
    this.firstname = data.firstname;
    this.lastname = data.lastname;
    this.barangay = data.barangay;
    this.municipality = data.municipality;
    this.city = data.city;
    this.region = data.region;
    this.phonenumber = data.phonenumber;
    this.emailaddress = data.emailaddress;

    this.toPass = this.toPass.filter(item => {
      if(item != data) {
        return data;
      }
    });
    }
    else{
      alert("Please save your current changes")
    }
    
  }

  ngOnInit() {
  }

}
