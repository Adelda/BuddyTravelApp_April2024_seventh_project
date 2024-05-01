import { Component } from '@angular/core';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-assistance',
  templateUrl: 'assistance.page.html',
  styleUrls: ['assistance.page.scss'],
})
export class AssistancePage {
  segmentValue: string = 'faq';

  constructor(public navCtrl: NavController) {}
}
