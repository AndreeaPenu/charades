import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import {StartComponent} from "./start/start.component";
import {JoinComponent} from "./start/join/join.component";
import {NewComponent} from "./start/new/new.component";



const appRoutes: Routes = [
  {path: '',redirectTo: '/home', pathMatch:'full'},
  {path: 'home',component: StartComponent},
  {path: 'join',component: JoinComponent},
  {path: 'new',component: NewComponent},
  ];

@NgModule({
  imports: [
    RouterModule.forRoot(appRoutes)
  ],
  exports: [
    RouterModule
  ]
})
export class AppRoutingModule {

}
