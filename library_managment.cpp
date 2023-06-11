#include<iostream>
#include<iomanip>
using namespace std;
class Books
{
	char Auther_name[30],Title[20];
	int Stock;
	float price;
	public:
		virtual void input()
		{
			cout<<"Enter Title :";cin>>Title;
			cout<<"Enter author name :";cin>>Auther_name;
			cout<<"Enter number of stock :";cin>>Stock;
			cout<<"Enter price of book :";cin>>price;
		}
		virtual void display()
		{
			cout<<"Title name :"<<Title<<endl;
			cout<<"Auther name :"<<Auther_name;
			cout<<"Number of stock :"<<Stock<<endl;
			cout<<"Price of book :"<<price<<endl;
		}
};
class Software_book:public Books
{
	char Software_name[30],Software_version[30];
	int Number_of_page;
	
	void input()
		{
			Books::input();
			cout<<"Enter software name :";cin>>Software_name;
			cout<<"Enter software version :";cin>>Software_version;
			cout<<"Enter number of pages :";cin>>Number_of_page;			
		}
		void display()
		{
			cout<<"------------------------------------------------------------"<<endl;
			Books::display();
			cout<<"Software name :"<<Software_name<<endl;
			cout<<"Software version :"<<Software_version;
			cout<<"Number of pages :"<<Number_of_page<<endl;
		}
};
class Hardware_book:public Books
{
	char Hardware_category[30],Hardware_publisher[30];
	int Number_of_page;
	
	void input()
		{
			
			Books::input();
			cout<<"Enter hardware category :";cin>>Hardware_category;
			cout<<"Enter hareware published :";cin>>Hardware_publisher;
			cout<<"Enter number of pages :";cin>>Number_of_page;			
		}
		void display()
		{
			cout<<"------------------------------------------------------------"<<endl;
			Books::display();
			cout<<"Hardware category :"<<Hardware_category<<endl;
			cout<<"Hareware published :"<<Hardware_publisher;
			cout<<"Number of pages :"<<Number_of_page<<endl;
		}
};
int main()
{
	int ch;
	char choice;
	cout<<"------------------------------------------------------------"<<endl;
	cout<<setw(40)<<"LIBRARY MANAGEMENT SYSTEM"<<endl;
	do
	{
		cout<<"------------------------------------------------------------"<<endl;
		cout<<"1. Software Book"<<endl<<"2. Hardware Books"<<endl<<"3. Exit"<<endl;
		cout<<"------------------------------------------------------------"<<endl;
		cout<<"Enter case :";cin>>ch;
		cout<<"------------------------------------------------------------"<<endl;
		Books *ptr;
		switch(ch)
		{
			case 1:
				cout<<setw(40)<<"Software Book Details"<<endl;
				ptr=new Software_book;
				ptr->input();
				ptr->display();
				break;
			case 2:
				cout<<setw(40)<<"Hardware Book Details"<<endl;
				ptr=new Hardware_book;
				ptr->input();
				ptr->display();
				break;
			case 3:
				exit(1);
				break;
		}
		cout<<"Do you want to continue this process press (y|Y) :";cin>>choice;
	}while(choice=='y'||choice=='Y');
}


