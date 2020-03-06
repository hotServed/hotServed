#include<bits/stdc++.h>
using namespace std;

void swap(int *a,int *b)
{
     int c=*a;
     *a=*b;
     *b=c;
}

void selectionSort(int n,int arr[])
{
     int i,j,minindex;

     for(i=0;i<n-1;i++)
     {
         i=minindex;
     for(j=i+1;j<n;j++)
     {
        if(arr[j]<arr[minindex])
        {
            minindex=j;
        }
        swap(&arr[minindex],&arr[i]);

     }
     }

}

void printArray(int arr[],int n)
{
for(int i=0;i<n;i++)
{
    cout << arr[i] << " ";
}
}

    int main()
    {
        int n;
        cin >> n;
        int arr[n];
        for(int i=0;i<n;i++)
        {
        cin >> arr[i];
        }
        selectionSort(n,arr);
        printArray(arr,n);
        return 0;
    }