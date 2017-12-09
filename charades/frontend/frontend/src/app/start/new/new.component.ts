import { Component, OnInit } from '@angular/core';
import {Http} from "@angular/http";
import {FormGroup, NgForm} from "@angular/forms";

@Component({
  selector: 'app-new',
  templateUrl: './new.component.html',
  styleUrls: ['./new.component.css']
})
export class NewComponent implements OnInit {
  newgameformgroup: FormGroup;

  constructor(private http:Http) { }

  ngOnInit() {
  }

  onSignup(form: NgForm){
    const username= form.value.username;

    this.http.get(`http://localhost:8000/api/v1/session/`+ username).subscribe(response => {console.log(response)});


  }
}
