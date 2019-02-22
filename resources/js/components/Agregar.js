import React, { Component } from 'react';
import ReactDOM from 'react-dom';


export default class Agregar extends Component {

    render(){

    return (

      <div className="container">

      <div className="alert alert-info"><strong>Categoría</strong></div>

      <select name="categoria" className="form-control ">
        <option value="Destacadas">Noticia destacada</option>
        <option value="Nacionales">Nacional</option>
        <option value="Provinciales">Provincial</option>
        <option value="Regionales"> Regional</option>
        <option value="Sociales">Social</option>
        <option value="Agro">Agro</option>
      </select>
<br />
      <div className="alert alert-info"><strong>Título</strong></div>
       <input className="form-control" name="titulo" placeholder="Ingresa el título de la noticia .. " />
<br />
      <div className="alert alert-info"><strong>Subtitulo</strong></div>
      	<input className="form-control" name="subtitulo" placeholder="Ingresa el subtitulo de la noticia.." />
<br />
      <div className="alert alert-info mt-1"><strong>Cuerpo</strong></div>

      	<textarea className="form-control" name="cuerpo">Ingresa el cuerpo de la noticia, (éste campo es obligatorio) ..</textarea>

<br />
      <div className="alert alert-info mt-1"><strong>Imagen</strong></div>

          <input className="btn btn-primary" name="fichero" type="file"  />
<br />

  <div className="alert alert-danger mt-3"><strong>Url de Video de YouTube (No obligatorio)</strong></div>

  <input className="btn btn-danger" name="video" type="file"  />

<br />
      <div className="alert alert-info mt-1"><strong>Epigrafe</strong></div>
      	 <input name="epigrafe" className="form-control" placeholder="Ingresa el epígrafe de la noticia.." required />
<br />
      <input className="btn btn-info mt-1" type="submit" name="boton" value="enviar noticia" />
      </div>

        );
    }
}

if (document.getElementById('agregar')) {
    ReactDOM.render(<Agregar />, document.getElementById('agregar'));
}
