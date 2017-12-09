import { Component, OnInit } from '@angular/core';
import {Http} from "@angular/http";
import {FormGroup, NgForm} from "@angular/forms";
import {Router} from "@angular/router";
import {AppService} from "../app.service";

@Component({
  selector: 'app-new',
  templateUrl: './new.component.html',
  styleUrls: ['./new.component.css']
})
export class NewComponent implements OnInit {

  key:any;

  constructor(private http:Http, private router:Router, private service: AppService) { }

  ngOnInit() {
  }

  onSignup(form: NgForm){
    const username= form.value.username;
    // console.log(this.service.startgame(username));
    this.http.get(`http://localhost:8000/api/v1/session/`+ username).subscribe(response =>{
      const res = response.json();
      this.router.navigate(['game/'+res.session_key]);
    });
  }
}
