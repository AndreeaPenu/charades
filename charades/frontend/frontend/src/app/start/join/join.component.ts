import { Component, OnInit } from '@angular/core';
import {NgForm} from "@angular/forms";
import {Router} from "@angular/router";
import {Http} from "@angular/http";

@Component({
  selector: 'app-join',
  templateUrl: './join.component.html',
  styleUrls: ['./join.component.css']
})
export class JoinComponent implements OnInit {

  constructor(private http:Http, private router:Router) { }

  ngOnInit() {
  }
  onSignup(form: NgForm){
    const session_key= form.value.session_key;
    const username= form.value.username;

    this.http.get(`http://localhost:8000/api/v1/participators/`+ username +`/`+session_key).subscribe(response => {
      this.router.navigate(['game/'+session_key]);
    });


  }

}
