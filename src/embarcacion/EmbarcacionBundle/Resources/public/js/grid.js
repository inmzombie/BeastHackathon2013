  
$(function(){
    var App = {};
    var url = Routing.generate('return_materiales');
    App._exampleCollection = Backbone.Collection.extend({
        url: url
    });
    
    App.companies = new Backbone.Collection;
    App.clearGridCollection = new Backbone.Collection;
    App.exampleCollection = new App._exampleCollection();  
    
    App.exampleCollection.fetch({ wait: true, 
        success:function(collection) {
            App.ClearExampleGrid = new bbGrid.View({
                container: $('#bbGrid-clear'),
//                rows: 5,
//                rowList: [5, 25, 50, 100],
                collection: App.clearGridCollection,
//                enableSearch: true,
                colModel: [{ title: 'ID', name: 'id' },
                           { title: 'Tipo de Suelo', name: 'tipo'},
                           { title: 'Descripción', name: 'descripcion'}],
                buttons: [{
                        title: 'Elegir material',
                        onClick: function(){
                            $('.sonata-collection-row').each(function(index,obj){
                               console.log(index);
                               id = $($(obj)[0].lastElementChild).attr('id');                               
                            })
                            
                            var models = this.view.getSelectedModels();
                            if ( !_.isEmpty(models)) {
                                $('#'+id+'_material').val(_.first(models).get('id'))
                                //alert(_.first(models).get('tipo'));
                            } else {
                                alert('No seleccionó nada');
                            }

                        }
                }]                       
                                
            });

            App.clearGridCollection.reset(collection.models.slice(0, 10));           
        }
    });
    

    
});