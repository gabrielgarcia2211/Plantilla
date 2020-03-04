$(document).ready(function () {
  // Global Settings
  let edit = false;
  carga();
  // Testing Jquery
  console.log('jquery is working!');
  //fetchTasks();
  //$('#task-result').hide();


  // search key type event
  $('#buscador').keyup(function (e) {
    if ($('#buscador').val()) {
      let busca = $('#buscador').val();
      $.ajax({
        url: '../search.php',
        data: { search:busca },
        type: 'POST',
        success: function (response) {
          if (!response.error) {
            let tasks = JSON.parse(response);
            let template = '';
            tasks.forEach(ta => {
              template += `<tr>
              <td>${ta.id}</td>
              <td>${ta.nombre}</td>
              <td>${ta.descripcion}</td>
              </tr>`
            });
            console.log(template);
            $('.egt tbody').html(template);
          }
        }
      })
    }
  });

  $('#formulario').submit(function(e){
    var objDate={
      nombre:$('#titulo').val(),
      descripcion:$('#descripcion').val(),
      id:$('#oculto').val()
    };

    var url= (!edit) ? '../add.php':'../edit.php';
    $.post(url, objDate, function(response){
     edit=false;
     console.log(response);
      carga();
     $('#formulario').trigger('reset');
    })
    e.preventDefault();
  })

  function carga(){
    $.ajax({
      url:'../list.php',
      type: 'GET',
      success: function (response) {
          let tasks = JSON.parse(response);
          let template = '';
          tasks.forEach(ta => {
            template += `<tr taskId="${ta.id}">
            <td >${ta.id}</td>
            <td><a href="#" class="tomar">${ta.nombre}</a></td>
            <td>${ta.descripcion}</td>
            <td>
              <button class="delete task">Eliminar</button>
            </td>
            </tr>`
          });
          //console.log(template);
          $('tbody').html(template);
        
      }
    })
  }

  $(document).on('click', '.task' , function(){
    if(confirm('Eliminar')){
      var aux=$(this)[0].parentElement.parentElement;
      var id=$(aux).attr('taskId');
      $.post('../delete.php', {id:id}, function(response){
      carga();
      //console.log(response);
    })
    }
  })

  $(document).on('click', '.tomar' , function(){
      const element = $(this)[0].parentElement.parentElement;
      const id = $(element).attr('taskId');
      //id:culquier cosa en este caso 'id'
      $.post('../single.php', {id}, function(response){
      const task = JSON.parse(response);
      $('#titulo').val(task.nombre);
      $('#descripcion').val(task.descripcion);
      $('#oculto').val(task.id);
      edit=true;
      console.log(response);
      //$('#taskId').val(task.id);
      })
  })

});


