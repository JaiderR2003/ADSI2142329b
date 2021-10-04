//4ta forma de crear objetos en JS
/*class Estudiante{    
     constructor(nombre,apellido){
         this.nombre=nombre;
         this.apellido=apellido;
     }     

}
var e1=new Estudiante('ana','angel');
var e2=new Estudiantes('jorge','Linero');
console.log(typeof(e1));
console.log(e1.nombre);

//3ra forma de trabajar con objetos en JS
function Aprendiz(nombre,apellido){
    this.nombre=nombre;
    this.apellido=apellido;
    this.nombreCompleto=function(){
        return this.nombre+' '+this.apellido;
    }
}
var ob=new Aprendiz('Luis','Diaz');
var ob2=new Aprendiz('Paola','Suarez');
console.log(typeof(ob));
console.log(ob.nombre);
console.log(ob2.nombre);
console.log(ob.nombreCompleto());
console.log(ob2.nombreCompleto());

//atributos=propiedades
//this=esta clase, este objeto
//2da forma de generar objetos en JS
//JSON=Java Script Object Notation -clave:valor
var alumno={
    nombre:'Pedro',
    apellido:'Diaz',
    nombreCompleto:function(){
        return this.nombre+' '+this.apellido;
    }
}
console.log(typeof(alumno));
alumno.telefono='301222222';
//recorrer claves de objeto con for in
for(atributo in alumno){
    console.log(atributo);
}

//convertir valores de objeto a array
var arreglo=Object.values(alumno);
console.log(arreglo);

console.log(alumno);
delete alumno.apellido;
console.log(alumno);
*/
var frac={
    n1:1,
    n2:2,
    d1:2,
    d2:3,
    suma:function(){
        numeradorS1=this.n1 * this.d2;
        numeradorS2=this.n2 * this.d1;
        numeradorSF=numeradorS1 + numeradorS2;
        denominadorS=this.d1 * this.d2;
        return 'el resultado de la suma es '+ numeradorSF + ' / ' + denominadorS;
    },
    resta:function(){
        numeradorR1=this.n1 * this.d2;
        numeradorR2=this.n2 * this.d1;
        numeradorRF=numeradorS1 - numeradorS2;
        denominadorR=this.d1 * this.d2;
        return 'el resultado de la resta es '+ numeradorRF + ' / ' + denominadorR;
    },
    multi:function(){
        numeradorM1=this.n1 * this.n2;
        numeradorM2=this.d1 * this.d2;
        return 'el resultado de la multiplicacion es '+ numeradorM1 + ' / ' +numeradorM2;
    },
    divi:function(){
        numeradorD1=this.n1 * this.d2;
        numeradorD2=this.n2 * this.d1;
        return 'el resultado de la division es '+ numeradorD1 + ' / ' +numeradorD2;
    }
}

console.log(frac.suma());

console.log(frac.resta());

console.log(frac.multi());

console.log(frac.divi());

//acceso por operador punto
/*
console.log(alumno.nombreCompleto());
console.log(alumno.nombre);
console.log(alumno.apellido);

//acceso por operador llave
console.log(alumno['nombreCompleto']);
console.log(alumno['nombre']);
console.log(alumno['apellido']);

//console.log(typeof(alumno))
//1ra forma de generar objetos en JS
var persona=new Object();
persona.nombre='Juan';
persona.apellido='Bautista';
persona.mostrar=function(){
    return nombre+' '+apellido;
}


// var num=100;
// console.log(typeof(num));
// var t='palabra';
// console.log(typeof(t));
*/