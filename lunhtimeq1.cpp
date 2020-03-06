#include <iostream>
using namespace std;
 
int main() {
	int t;
	cin >> t;
	for(int i=0;i<t;i++)
	{
		int n,k;
		cin >> n >>k;
		int h=k;
		char arr[n];
		for(int i=0;i<n;i++)
		{
			cin >> arr[i];
		}
		for(int j=n-1;k!=0;j--)
		{
			if(arr[j]==84)
			{
				k--;
				continue;
			}
			else
			{
				for(int q=0;q<n-k;q++)
				{
					if(arr[q]==72)
					{
						arr[q]==84;
					}
					else
					{
						arr[q]==72;
					}
				}
				k--;
			}
		}
 
		int count =0;
		for(int a=0;a<n-h;a++)
		{
			if(arr[a]==72)
			{
				count++;
			}
			else
			{
				continue;
			}
		}
 
		cout << count << endl;
	}
	return 0;
}