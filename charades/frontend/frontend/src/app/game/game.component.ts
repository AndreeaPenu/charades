import { Component, OnInit } from '@angular/core';
import {ActivatedRoute, Params} from "@angular/router";
import {NgForm} from "@angular/forms";
import {Http} from "@angular/http";

@Component({
  selector: 'app-game',
  templateUrl: './game.component.html',
  styleUrls: ['./game.component.css']
})
export class GameComponent implements OnInit {
  sessionKey:any;
  constructor(private http:Http, private route: ActivatedRoute) { }

  ngOnInit() {
    this.route.params.subscribe(
        (params: Params) => {
          this.sessionKey=params['sessionkey'];
        }
    );
  }

  answer(form: NgForm){
    this.http.get('http://localhost:8000/api/v1/answer/' + this.sessionKey).subscribe(response => {

    });
  }

}
