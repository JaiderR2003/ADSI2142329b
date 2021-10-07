// ------------------- HERENCIA ---------------------

class ZonasVerdes{
    constructor(IdZona, Nombre){
        this._IdZona=IdZona;
        this._Nombre=Nombre;
    }

    set IdZona(IdZona){
        this._IdZona=IdZona;
    }

    get IdZona(){
        return this._IdZona;
    }

    set Nombre(Nombre){
        this._Nombre=Nombre;
    }

    get Nombre(){
        return this._Nombre;
    }
}

class ZonasNaturales extends ZonasVerdes{
    constructor (IdZona, Nombre, Ubicacion, Descripcion, Imagen){
        super(IdZona, Nombre);
        this._Ubicacion=Ubicacion;
        this._Descripcion=Descripcion;
        this._Imagen=Imagen;
    }

    set Ubicacion(Ubicacion){
        this._Ubicacion=Ubicacion;
    }

    get Ubicacion(){
        return this._Ubicacion;
    }

    set Descripcion(Descripcion){
        this._Descripcion=Descripcion;
    }

    get Descripcion(){
        return this._Descripcion;
    }

    set Imagen(Imagen){
        this._Imagen=Imagen;
    }

    get Imagen(){
        return this._Imagen;
    }
}

zona=new ZonasNaturales(1, 'Boquemonte', 'Via Tequendama', 'Parque natural', 'https://i.ytimg.com/vi/a2JOp_I-_z4/maxresdefault.jpg');

console.log(zona);

// ------------------- COMPOSICION ---------------------

class Zonas{
    constructor(znas){
        this._znas=znas;
    }
}

var zn1=new ZonasVerdes();
var zn2=new ZonasVerdes(); 
var misitio=[];
misitio.push(zn2);
misitio.push(zn1);
mizona=new Zonas(misitio);