import { ComponentFixture, TestBed } from '@angular/core/testing';
import { RestareaDetailPage } from './restarea-detail.page';

describe('RestareaDetailPage', () => {
  let component: RestareaDetailPage;
  let fixture: ComponentFixture<RestareaDetailPage>;

  beforeEach(() => {
    fixture = TestBed.createComponent(RestareaDetailPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
