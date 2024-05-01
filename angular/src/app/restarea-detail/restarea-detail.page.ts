import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, Router } from '@angular/router';
import { ApiService } from 'src/services/api.service';


@Component({
  selector: 'app-restarea-detail',
  templateUrl: './restarea-detail.page.html',
  styleUrls: ['./restarea-detail.page.scss'],
})
export class RestareaDetailPage implements OnInit {
  restArea: any | null = null;
  restAreaId: string | null = null;

  constructor(
    private route: ActivatedRoute,
    private router: Router,
    private apiService: ApiService // Injectez le service ApiService
  ) { }

  ngOnInit() {
    this.restAreaId = this.route.snapshot.paramMap.get('id');
    this.fetchRestAreaDetails();
  }

  fetchRestAreaDetails() {
    if (this.restAreaId) {
      this.apiService.getRestAreaById(Number(this.restAreaId)).subscribe(
        (data: any) => {
          this.restArea = data;
        },
        (error) => {
          console.error('Error fetching rest area details:', error);
        }
      );
    }
  }

  goBack() {
    this.router.navigate(['/home']);
  }
}
