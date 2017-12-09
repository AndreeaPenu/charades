import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import {HttpModule} from "@angular/http";
import { StartComponent } from './start/start.component';
import { JoinComponent } from './start/join/join.component';
import { NewComponent } from './start/new/new.component';
import { OverzichtComponent } from './start/overzicht/overzicht.component';
import { GameComponent } from './game/game.component';
import {AppRoutingModule} from "./app-routing.module";
import {FormsModule} from "@angular/forms";


@NgModule({
  declarations: [
    AppComponent,
    StartComponent,
    JoinComponent,
    NewComponent,
    OverzichtComponent,
    GameComponent
  ],
  imports: [
    BrowserModule,
    HttpModule,
    FormsModule,
    AppRoutingModule,

  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
