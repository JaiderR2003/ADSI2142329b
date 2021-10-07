// FUNCION TRADICIONAL SIN PARAMETROS

function sinParametros(){
    return 'Hola mundo';
}

console.log('tradicional: '+sinParametros());

// FUNCION FLECHA SIN PARAMETROS

var sinParam=()=>'Hola mundo';

console.log('flecha: '+sinParam());

// FUNCION FLECHA CON UN PARAMETRO
// FUNCION TRADICIONAL CON UN PARAMETRO

function cuadrado (num){
    return num*num;
}

console.log('tradicional: '+cuadrado(10))

//VERSION FLECHA

var r=nume=>nume*nume;

console.log('flecha: '+r(5))

//FUNCION FLECHA CON VARIOS PARAMETROS
//FUNCION TRADICIONAL CON VARIOS PARAMETROS

function suma(n,m) {
    return n+m;
}

console.log('tradicional: '+suma(5, 30));

//VERSION FLECHA

var sumar=(n,m)=>n+m;

console.log('flecha: '+sumar(15,5));


var vec=(array, tam)=>{
    for (let i = 0; i < tam; i++) {
        array.push(Math.round(Math.random()*100));
    }
    return array;
}
v=[];
x=5;

console.log('llenado de vectores version flecha: '+vec(v,x));

var sumPar=(array)=>{

    let suma=0;

    for (let i = 0; i < array.length; i++) {

        if (array[i] % 2 == 0) {
            suma += v[i];
        }
    }

    return suma;
}

console.log(vec(v,x));

console.log('la suma de los Pares es..'  +sumPar(v));

var sumImpar=(array)=>{

    let sumaI=0;

    for (let i = 0; i < array.length; i++) {

        if (array[i] % 2 !== 0) {
            sumaI += v[i];
        }
    }

    return sumaI;
}

console.log('la suma de los Impares es..'  +sumImpar(v));