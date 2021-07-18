new Vue({
    el: '#app',
    data: {
        idea_txt:'',
        prioridad: '',
        lista_ideas: [
            {'id': 0, 'idea': 'Mi primera idea', 'prioridad': 'N'},
            {'id': 1, 'idea': 'Mi segunda idea', 'prioridad': 'I'},
            {'id': 2, 'idea': 'Mi tercera idea', 'prioridad': 'M'},
        ],
        search_text:'',
        ideas_servidor: []
    },
    watch:{
        search_text: function(val){
            this.BuscarIdeas(val);
        },
    },

    computed:{

    },
    methods: {
        AgregarIdea: function(){
            var idea ={
                'id': this.lista_ideas.lenght,
                'idea': this.idea_txt,
                'prioridad': this.prioridad
            };
            this.lista_ideas.push(idea)
        },
        BuscarIdeas: function(valor){
            this.lista_ideas = this.lista_ideas.filter(
                (value) => {
                    return value.idea.toLowerCase().indexOf(
                        valor.toLowerCase()
                    )>=0
                }
            )

        },
        EliminarIdea: function(idea_id){
            let index = this.lista_ideas.findIndex( e => e.id === idea_id);
            this.lista_ideas.splice(index, 1);
        },
        CargarDatosServidor: function(){
            var self = this
            axios
            .get('https://tuportalprever.com.co/copenv2/api/v2/getobituarios').then(
                function(response){
                    self.ideas_servidor = response.data
                    console.log(response.data)
                }
            )
            
        }
    }
    /* ejemplo investigar que hace mounted 
    mounted () {
        axios
        .get('https://api.coindesk.com/v1/bpi/currentprice.json')
        .then(response => (this.info = response))
    }*/
})
