import { Component, OnInit, Input, Output, EventEmitter } from '@angular/core';

@Component({
  selector: 'app-table',
  templateUrl: './table.component.html',
  styleUrls: ['./table.component.css']
})
export class TableComponent implements OnInit {

  @Input()toPass:any[]=[];
  @Output()toPut = new EventEmitter();


  toShow = true;

  constructor() { }

  onEdited(data: any) {
    this.toPut.emit(data);
    this
  }

  ngOnInit() {
  }

}
