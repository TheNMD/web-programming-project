function max() 
{
    const arr = [5, 25, 13, 8, 45, 6, 11];
    let max = arr[0];
    for (let i = 0; i < arr.length; i++) 
    {
        if(arr[i] >= max) max = arr[i];
    } 
    document.getElementById("array").innerHTML = max;
}

function min() 
{
    const arr = [5, 25, 13, 8, 45, 6, 11];
    let min = arr[0];
    for (let i = 0; i < arr.length; i++) 
    {
        if(arr[i] <= min) min = arr[i];
    } 
    document.getElementById("array").innerHTML = min;
}

function sortsmall() 
{
    const arr = [5, 25, 13, 8, 45, 6, 11];
    let temp = 0;
    for (let i = 0; i < arr.length - 1; i++) 
    {
        for (let j = 0; j < arr.length - i - 1; j++)
        {
            if(arr[j] > arr[j + 1]) 
            {
                temp = arr[j];
                arr[j] = arr[j + 1];
                arr[j + 1] = temp;
            }
        }
    } 
    document.getElementById("array").innerHTML = arr;
}

function sortlarge() 
{
    const arr = [5, 25, 13, 8, 45, 6, 11];
    let temp = 0;
    for (let i = 0; i < arr.length - 1; i++) 
    {
        for (let j = 0; j < arr.length - i - 1; j++)
        {
            if(arr[j] < arr[j + 1]) 
            {
                temp = arr[j];
                arr[j] = arr[j + 1];
                arr[j + 1] = temp;
            }
        }
    } 
    document.getElementById("array").innerHTML = arr;
}