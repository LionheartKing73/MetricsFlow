$(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          // "autoWidth": false,
          "scrollCollapse": false,
          // "bAutoWidth": true
          "fixedColumns": true,
          columnDefs: [
           { targets: [1], width: '100px', bSortable: true },
           { targets: [2], bSortable: true},
           { targets: [3], bSortable: true},
           {targets: [4], bSortable: true},
           {targets: [5], bSortable: true},
           {targets: [6], bSortable: true},
           {targets: [7], bSortable: true},
           {targets: [8], bSortable: false}
          ],
        });
        $('#example3').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "scrollCollapse": false,
          "fixedColumns": true,
          columnDefs: [
           { targets: [1], width: '100px', bSortable: true },
           { targets: [2], bSortable: true},
           { targets: [3], bSortable: true},
           {targets: [4], bSortable: true},
           {targets: [5], bSortable: true}
          ]
        });
            $('#example4').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "scrollCollapse": false,
          "fixedColumns": true,
          columnDefs: [
           { targets: [1], width: '100px', bSortable: true },
           { targets: [2], bSortable: true},
           { targets: [3], bSortable: true},
           {targets: [4], bSortable: true},
           {targets: [5], bSortable: true}
          ]
        });
        $('#example5').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "scrollCollapse": false,
          "fixedColumns": true,
          columnDefs: [
           { targets: [1], width: '100px', bSortable: true },
           { targets: [2], bSortable: true},
           { targets: [3], bSortable: true},
           {targets: [4], bSortable: true},
           {targets: [5], bSortable: true}
          ]
        });
         $('#example6').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "scrollCollapse": false,
          "fixedColumns": true,
          columnDefs: [
           { targets: [1], width: '100px', bSortable: true },
           { targets: [2], bSortable: true},
           { targets: [3], bSortable: true},
           {targets: [4], bSortable: true},
           {targets: [5], bSortable: true}
          ]
        });
      });