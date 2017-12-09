import { Component,OnInit } from '@angular/core';
import {Http, Response} from "@angular/http";
@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'app';
  constructor(private http: Http){}
  ngOnInit() {
    // this.http.get(`http://localhost:8000/api/v1/session/`).subscribe(response => {console.log(response)});
  }
}
