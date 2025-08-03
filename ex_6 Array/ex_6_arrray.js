let fruits = ['apple','orange','banana'];

document.write(fruits[0]);
document.write(fruits[1]);
document.write(fruits[2]);

document.write("<br>");

//Using for loop
for(let i =0;i<fruits.length;i++)
{
  document.write("<br>");
  document.write(fruits[i]);
 
}

document.write("<br>");

//Using forEach
fruits.forEach(function(fruits)
{
    document.write("<br>");
    document.write(fruits);
})
