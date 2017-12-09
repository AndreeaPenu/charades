import {Injectable} from "@angular/core";
import {Router} from "@angular/router";
import {Http, Response} from "@angular/http";
import 'rxjs/Rx';
import {Observable} from "rxjs";
@Injectable()
export class AppService {
    constructor(private http: Http, private router: Router) {
    }

    getWords(){
        // this.http.get(`http://localhost:8000/api/v1/words`).subscribe(response => {
        //     console.log(response)
        // });
    }
}
