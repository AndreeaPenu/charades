import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import {StartComponent} from "./start/start.component";
import {JoinComponent} from "./start/join/join.component";
import {NewComponent} from "./start/new/new.component";
import {OverzichtComponent} from "./start/overzicht/overzicht.component";
import {GameComponent} from "./game/game.component";



const appRoutes: Routes = [
  {path: '',redirectTo: '/home', pathMatch:'full'},
  {path: 'home',component: StartComponent},
  {path: 'join',component: JoinComponent},
  {path: 'new',component: NewComponent},
  {path: 'game/:sessionkey',component: GameComponent},
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
