import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { environment } from 'src/environments/environment'; // Importez environment

@Injectable({
  providedIn: 'root'
})
export class ApiService {

  apiUrl = environment.apiUrl; // Déclarez apiUrl et assignez-lui la valeur de l'URL de l'API provenant de environment

  constructor(private http: HttpClient) { }

  getAllRestAreas(page: number = 1): Observable<any> {
    return this.http.get(`${this.apiUrl}/rest_areas?page=${page}`);
  }

  getRestAreaById(id: number): Observable<any> {
    return this.http.get(`${this.apiUrl}/rest_areas/${id}`);
  }

}
