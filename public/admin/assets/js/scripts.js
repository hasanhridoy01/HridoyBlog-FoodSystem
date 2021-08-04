(function($){
  $(document).ready(function(){

      //Logout Button
      $(document).on('click','a#logout-button', function(event){
        event.preventDefault();
        //Submit Form
        $('form#logout-form').submit();
      });

      //Category_Table Data table
      $('#Category_Table').dataTable({
         processing : true,
         serverSide : true,
         ajax : {
            url : 'category'
         },
         columns : [
            {
               data : 'id',
               name : 'id'
            },
            {
               data : 'name',
               name : 'name'
            },
            {
               data : 'slug',
               name : 'slug'
            },
            {
               data : 'photo',
               name : 'photo',
               render : function(data, type, full, meta){
                  return `<img src="media/photos/category/${data}" style="height: 80px;">`;
               }
            },
            {
               data : 'created_at',
               name : 'created_at'
            },
            {
               data : 'status',
               name : 'status'
            },
         ],
      });
     
  });
})(jQuery)