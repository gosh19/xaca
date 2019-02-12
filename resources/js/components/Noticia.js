import React, { Component } from 'react';
import ReactDOM from 'react-dom';


export default class Noticia extends Component {

  constructor() {
    super();
    this.state = {
      destacada: [],
    };
  }

  componentDidMount(){
    axios.get('http://localhost:8000/noticias')
    .then(response => {
      this.setState({ destacada: response.data});
      console.log(this.state.destacada[0].titulo);

    })
    .catch(function (error) {
      console.log(error);
    });

  }

    render() {

        return (
            <div className="container mt-3">
                <div className="row">
                    <div className="col-md-8">
                    <div className="header-destacada">
                        <h4 className="titulo-destacada">Destacadas</h4>
                    </div>
                        <div className="titulo-noticia"></div>
                        <p className="subtitulo-noticia">La Coalición Cívica volvió a poner la lupa sobre una iniciativa de la Casa Rosada, en este caso del Ministerio de Justicia que conduce Germán Garavano.</p>
                        <img width="100%" src="img/cristina.jpg" />

                        <div className="row mt-3">
                            <div className="col-md-6">
                            <div className="header-social">
                                <h4 className="titulo-social" >Sociales</h4>
                            </div>
                                <p className="titulo-noticia-bloque">El Riesgo País resta otro 3% y retrocede a niveles de tres meses atrás</p>
                                <p className="subtitulo-noticia-bloque">El indicador de JP Morgan cae a 629 puntos básicos, el más bajo desde el pasado 12 de noviembre. Desde el 28 de diciembre retrocedió más de 200 unidades.</p>
                                <img width="100%" src="img/bolsa.jpg" />
                            </div>
                            <div className="col-md-6">
                            <div className="header-agro">
                                <h4 className="titulo-agro" >Agro</h4>
                            </div>
                                <p className="titulo-noticia-bloque">El Riesgo País resta otro 3% y retrocede a niveles de tres meses atrás</p>
                                <p className="subtitulo-noticia-bloque">El indicador de JP Morgan cae a 629 puntos básicos, el más bajo desde el pasado 12 de noviembre. Desde el 28 de diciembre retrocedió más de 200 unidades.</p>
                                <img width="100%" src="img/bolsa.jpg" />
                            </div>


                        </div>
                    </div>

                    <div className="col-md-4">
                    <div className="header-nacional">
                        <h4 className="titulo-nacional" >Nacionales</h4>
                    </div>
                        <p className="titulo-noticia-bloque">El Riesgo País resta otro 3% y retrocede a niveles de tres meses atrás</p>
                        <p className="subtitulo-noticia-bloque">El indicador de JP Morgan cae a 629 puntos básicos, el más bajo desde el pasado 12 de noviembre. Desde el 28 de diciembre retrocedió más de 200 unidades.</p>
                        <img width="100%" src="img/bolsa.jpg" />

                        <div className="header-provincial mt-4">
                            <h4 className="titulo-provincial" >Provinciales</h4>
                        </div>
                            <p className="titulo-noticia-bloque">Nuevo registro de mujeres aspirantes a choferes de colectivo.</p>
                            <p className="subtitulo-noticia-bloque">A partir de la demanda de una chofer de colectivo a tres empresas que se negaron a contratarla por ser mujer, la Secretaría de Trabajo presentó oficialmente un listado que las registra y que obliga a esas empresas a tener un cupo de mujeres al volante.</p>
                            <img width="100%" src="img/conductoras.jpg" />

                    </div>

                </div>
            </div>
        );
    }
}

if (document.getElementById('noticias')) {
    ReactDOM.render(<Noticia />, document.getElementById('noticias'));
}
