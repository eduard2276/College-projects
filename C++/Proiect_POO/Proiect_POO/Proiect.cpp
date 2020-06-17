#include<iostream>
#include<string.h>
#include<conio.h>
#include<string>
#include<fstream>

using namespace std;
//--------------------------------------------------------------------------//

class Lista; // Clasa prototip a clasei Lista

//--------------------------------------------------------------------------//


class Sporturi // classa de baza 
{
private:
	int tip;
	string Nume_Echipa, Nume_Antrenor;
	int Numar_Persoane;
	Sporturi *urm;

public:
	Sporturi() // constructor null
	{
		Sporturi::tip=0;
		Sporturi::Nume_Echipa = "";
		Sporturi::Nume_Antrenor = "";
		Sporturi::Numar_Persoane = 0;
		Sporturi::urm=NULL;
	}

	Sporturi(int tip,string Nume_Echipa, string Nume_Antrenor, int Numar_Persoane)
	{
		Sporturi::tip=tip;
		this->Nume_Echipa = Nume_Echipa;
		Sporturi::Nume_Antrenor = Nume_Antrenor;
		Sporturi::Numar_Persoane = Numar_Persoane;
		Sporturi::urm=NULL;
	}

	virtual void Afisare() // fct de afisare 
	{
		cout<<"----------------------------\n";
		cout<<"Nume Echipa: "<<Sporturi::Nume_Echipa<<endl;
		cout<<"Nume antrenor: "<<Sporturi::Nume_Antrenor<<endl;
		cout<<"Numar Persoane: "<<Sporturi::Numar_Persoane<<endl;
	}

	virtual void Afisare_fisier(ofstream &g) // functie virtuala de afisare in fisierul g
	{
		g<<"----------------------------\n";
		g<<"Nume Echipa: "<<Sporturi::Nume_Echipa<<endl;
		g<<"Nume antrenor: "<<Sporturi::Nume_Antrenor<<endl;
		g<<"Numar Persoane: "<<Sporturi::Numar_Persoane<<endl;
	}



	friend class Lista;
};


//--------------------------------------------------------------------------//


class Volei: public Sporturi // subclasa a clasei de baza 
{
private:
	string Loc_de_intalnire,Categorie;

public:

	Volei():Sporturi()//constructor null
	{
		Volei::Loc_de_intalnire="";
		Volei::Categorie="";
	}

	Volei(int tip,string Nume_Echipa, string Nume_Antrenor, int Numar_Persoane,string Loc_de_intalnire, string Categorie):Sporturi(tip,Nume_Echipa, Nume_Antrenor, Numar_Persoane)
	{
		Volei::Loc_de_intalnire=Loc_de_intalnire;
		Volei::Categorie=Categorie;
	}

	void Afisare()
	{
		Sporturi::Afisare();
		cout<<"Loc de intalnire: "<<Volei::Loc_de_intalnire<<endl;
		cout<<"Categorie: "<<Volei::Categorie<<endl;
	}

	void Afisare_fisier(ofstream &g)
	{
		Sporturi::Afisare_fisier(g);
		g<<"Loc de intalnire: "<<Volei::Loc_de_intalnire<<endl;
		g<<"Categorie: "<<Volei::Categorie<<endl;
	}

	friend class Lista;
};


//--------------------------------------------------------------------------//


class Baschet: public Sporturi // subclasa a clasei de baza
{
private:
	string Club, Localitate;

public:

	Baschet():Sporturi() // constructor null
	{
		Baschet::Club="";
		Baschet::Localitate="";
	}

	Baschet(int tip,string Nume_Echipa, string Nume_Antrenor, int Numar_Persoane, string Club, string Localitate):Sporturi(tip, Nume_Echipa, Nume_Antrenor, Numar_Persoane)
	{
		Baschet::Club = Club;
		Baschet::Localitate = Localitate;
	}

	void Afisare()
	{
		Sporturi::Afisare();
		cout<<"Club: "<<Baschet::Club<<endl;
		cout<<"Localitate: "<<Baschet::Localitate<<endl;
	}

	void Afisare_fisier(ofstream &g)
	{
		Sporturi::Afisare_fisier(g);
		g<<"Club: "<<Baschet::Club<<endl;
		g<<"Localitate: "<<Baschet::Localitate<<endl;
	}

	friend class Lista;

};


//--------------------------------------------------------------------------//


class MyException // clasa de exceptii
{
public:
	string str_what;
	string what;

	MyException()
	{
		str_what="";
		what="";
	}
	MyException(string str_what, string what)
	{
		MyException::str_what=str_what;
		MyException::what=what;
	}


};


//--------------------------------------------------------------------------//


class Lista // clasa listei 
{
public:

	Sporturi *head; //capul listei 
	void Adaugare(Sporturi *sport); // functie de adaugare in lista
	void Afisare_Lista(); // functia de afisare a listei
	void Stergere_nume(string nume); // functia de stergere 
	void Schimbare_nume(string nume_de_schimbat,string nume_nou); // functia care cauta un nume introdus de la tastatura si in inlocieste cu alt nume introdus tot de la tastatura
	void Introduce_fisier_Antrenor(); // functia de introducere intr.un fisier a echipelor antrenate de un antrenor
	void Introduce_fisier();
};


//--------------------------------------------------------------------------//


void Lista::Adaugare(Sporturi *sport)
{
	Sporturi *q1, *q2;

	for(q1=q2=head;q1!=NULL && q1->Numar_Persoane < sport->Numar_Persoane; q2=q1, q1=q1->urm);

	if(q1==q2)//adaugare a unui sport in capu listei
	{
		sport->urm = head;
		head = sport;
	}
	else // adaugare in interior
	{
		q2->urm=sport;
		sport->urm=q1;
	}
}


void Lista::Afisare_Lista()
{
	Sporturi *q;
	q=head;

	if(q==NULL)
		cout<<"Lista e goala...."<<endl;
	else
	{
		while(q)
		{
			q->Afisare();
			q=q->urm;
			
		}

	}

}


void Lista::Stergere_nume(string num)
{
	Sporturi *q1, *q2;
	q1=q2=head;
	if(q1==NULL)
		cout<<"Lista e goala"<<endl;
	else
	{
		while(q1!=NULL && q1->Nume_Echipa!=num)
		{
			q2=q1;
			q1=q1->urm;
		}

		if(q1==NULL)
			cout<<"Elementul nu se gaseste in lista"<<endl;
		else
		{
			if(q1==q2)
			{ // stergerea primului nod din lista
				head = q1->urm;
				free(q1);
			}
			else
			{ // stergerea unui nod din interiorul listei
				q2->urm=q1->urm;
				free(q1);
			}
		}
	}
}


void Lista::Schimbare_nume(string nume_de_schimbat, string nume_nou)
{
	int ok=0;
	Sporturi *q;
	q=head;

	if (q==NULL) //daca head e null lista e goala
		cout<<"Lista e goala"<<endl;
	else
	{
		while(q!=NULL)
		{
			if(q->Nume_Antrenor==nume_de_schimbat) //in momentu in care gaseste antrenorul il schimba cu cel nou
			{
				q->Nume_Antrenor=nume_nou;
				ok=1;
			}
			q=q->urm;
		}
		if(ok==0)
			cout<<"Nu exista antrenorul"<<endl;

	}


}


void Lista::
	()
{
	Sporturi *q;
	ofstream g; // fisierul in care se introduce
	q=head;
	g.open("Sporturi_2.txt");

	if(g.is_open() == NULL)
		cout<<"Fisierul nu a putut fi deschis"<<endl;
	else
	{
		if(q==NULL)
		{
			cout<<"Lista este goala"<<endl;
		}
		else
		{
			g<<"Echipele de volei sunt: "<<endl<<endl;//introduce in fisier
			cout<<"Echipele de voiei sunt: "<<endl<<endl;//afiseaza pe ecran
			while(q!=NULL)
			{
				if(q->tip==1)
				{
					q->Afisare_fisier(g);//afiseaza toate echipele de volei in fisier
					q->Afisare(); // afiseaza toate echipele de volei pe ecran
				}
				q=q->urm;

			}

		}

		q=head;
		g<<endl<<endl<<"Echipele de baschet sunt: "<<endl<<endl;// la fel ca la volei
		cout<<endl<<endl<<"Echipele de baschet sunt: "<<endl<<endl;
		while(q!=NULL)
		{
			if(q->tip==2)
			{
				q->Afisare_fisier(g);
				q->Afisare();
			}
			q=q->urm;
		}


	}

	
}


void Lista::Introduce_fisier_Antrenor()
{
	Sporturi *q;
	ofstream g;
	string Antrenor;
	int ok=0;
	q=head;
	g.open("Sport_Antrenor.txt");

	if(!g.is_open())
		cout<<"Fisierul nu a putut fi deschis"<<endl;
	else
	{
		if(!q)
			cout<<"Lista e goala"<<endl;
		else
		{
			cout<<"Introduceti antrenorul: ";
			cin>>Antrenor;
			try
			{
				q=head;
				while(q!=NULL)
				{
					if(q->Nume_Antrenor==Antrenor)
					{
						ok=1;
						q->Afisare_fisier(g);
					}
					q=q->urm;
				}
				if(ok==0) // exceptie in cazul in care nu se gaseste antrenorul in lista, se introduce antrenor pana acesta e in lista
					throw MyException("Antrenorul nu se gaseste in lista",Antrenor);

			}catch (MyException e)
			{
				while(ok==0)
				{
					q=head;
					while(q!=NULL)
					{
						if(q->Nume_Antrenor==Antrenor)
						{
							ok=1;
							q->Afisare_fisier(g);
						}
						q=q->urm;
					}
					if(ok==0)
					{
						cout<<"Antrenorul nu se gaseste in lista, incercati alt antrenor: ";
						cin>>Antrenor;
					}

				}
				

			}

			cout<<"Echipele abtrenorului "<<Antrenor<<" au fost adaugate cu succes in fisier..."<<endl;

		}

	}


}


//--------------------------------------------------------------------------//




//--------------------------------------------------------------------------//


class Supraincarcare //clasa de supraincarcare
{
private:
	string Nume_echipa;

public:
	friend ostream & operator <<(ostream &out, Supraincarcare &a);
	friend istream & operator >>(istream &in, Supraincarcare &a);

	string ret_NumeEch()
	{
		return Nume_echipa;
	}

};


ostream & operator <<(ostream &out, Supraincarcare &a)//supraincarcare scriere
{
	cout<<"Nume Echipa: ";
	return out;
}


istream & operator >>(istream &in, Supraincarcare &a)//supraincarcare citire
{
	cin>>a.Nume_echipa;
	return in;
}



//--------------------------------------------------------------------------//


void Adaugare_din_fisier(Lista *list)//functie care introduce in lista datele din fisier
{
	Sporturi *sport;
	ifstream f;
	string Sport,Nume_Echipa,Nume_Antrenor,Loc_de_intalnire,Categorie,Club,Localitate;
	int numar_pers;

	f.open("Sporturi.txt");

	if(f.is_open())//verifica daca fisierul este deschis
	{
		while(!f.eof())//cat timp e deschis citeste din el si introduce in lista
		{
			f>>Sport;
			if(Sport=="Volei")
			{
				Volei *volei;

				f>>Nume_Echipa;
				f>>numar_pers;
				f>>Loc_de_intalnire;
				f>>Categorie;
				f>>Nume_Antrenor;

				volei=new Volei(1,Nume_Echipa,Nume_Antrenor,numar_pers,Loc_de_intalnire,Categorie);//creare unui nou obiect de tip Volei
				sport=volei; // cast la clasa de baza;
				list->Adaugare(sport);// adauga in lista
			}
			else
				if(Sport=="Baschet")
				{
					Baschet *baschet;

					f>>Nume_Echipa;
					f>>numar_pers;
					f>>Club;
					f>>Nume_Antrenor;
					f>>Localitate;

					baschet = new Baschet(2,Nume_Echipa,Nume_Antrenor,numar_pers,Club,Localitate);//creare unui nou obiect de tip Baschet
					sport=baschet; // cast la clasa de baza
					list->Adaugare(sport);//adauga in lsita
				}
		}

	}
	else
		cout<<"Fisierul nu a putut fi deschis"<<endl;


}


//--------------------------------------------------------------------------//


void Adaugare_manual(Lista *list) // functie de introducere in lista de la tastatura
{
	Sporturi *sport;
	string Sport,Nume_Echipa,Nume_Antrenor,Loc_de_intalnire,Categorie,Club,Localitate;
	int numar_pers;
	Supraincarcare supr;

	

	try//Exceptie in cazul in care sportul care trebuie introdus e altu in afara de Volei sau Baschet
	{
		cout<<"Introduceti sportul: Volei/Baschet: ";
		cin>>Sport;
		if(Sport!="Baschet" && Sport!="Volei")
			throw MyException("Sportul nu este ales corect",Sport);
	}
	catch (MyException e)
	{
		do
		{
			cout<<"Sport introdus incorect, introduceti sportul corect: ";
			cin>>Sport;
		}while(Sport!="Baschet" && Sport!="Volei");

	}

	if(Sport=="Volei")
	{
		Volei *volei;
		//se introduc datele
		cout<<supr;
		cin>>supr;

		cout<<"Numar persoane: ";
		cin>>numar_pers;

		cout<<"Nume Antrenor: ";
		cin>>Nume_Antrenor;

		cout<<"Loc de intalnire: ";
		cin>>Loc_de_intalnire;

		cout<<"Categorie: ";
		cin>>Categorie;

		volei = new Volei(1,supr.ret_NumeEch(),Nume_Antrenor,numar_pers,Loc_de_intalnire,Categorie);//se creaza un obiect
		sport = volei;	//cast
		list->Adaugare(sport);//introducere lista

	}
	else
	{
		Baschet *baschet;
		//se introduc datele
		cout<<supr;
		cin>>supr;

		cout<<"Numar persoane: ";
		cin>>numar_pers;

		cout<<"Nume Antrenor: ";
		cin>>Nume_Antrenor;

		cout<<"Club: ";
		cin>>Club;

		cout<<"Localitate: ";
		cin>>Localitate;

		baschet = new Baschet(2,supr.ret_NumeEch(), Nume_Antrenor, numar_pers, Club, Localitate); // se creaza obiect
		sport = baschet; //cast 
		list->Adaugare(sport);//introducere

	}

}


//--------------------------------------------------------------------------//


void stergere(Lista *list)//functie de stergere
{
	string nume;

	cout<<"Introduceti numele echipei care vreti sa fie sters: ";
	cin>>nume; // se introduce numele de sters
	list->Stergere_nume(nume);//functia care efetueaza stergerea

}


//--------------------------------------------------------------------------//


void schimbare_nume(Lista *list)
{
	string nume1, nume2;
	cout<<"Introduceti numele care vreti sa fie schimbat: ";
	cin>>nume1;//se introduce numele ce vrem sa se schimbe
	cout<<"Introduceti numele cu care vreti sa fie schimbat: ";
	cin>>nume2;//se introduce numele cu care o sa se schimbe
	list->Schimbare_nume(nume1,nume2);//functie care efectueaza schimbarea
}



void Meniu()//functia pentru afisarea meniului
{
	cout<<"0. Iesire."<<endl;
	cout<<"1. Incarcare informații dintr-un fișier."<<endl;
	cout<<"2. Adăugarea unei echipe noi."<<endl;
	cout<<"3. Afișarea echipelor pe categorie și salvarea în fișier."<<endl;
	cout<<"4. Stergerea unei echipe după nume."<<endl;
	cout<<"5. Modificarea numelui antrenorului."<<endl;
	cout<<"6. Sortarea listei după nr persoane."<<endl;
	cout<<"7. Salvarea într-un fișier a echipelor după numele atrenorului citit de la tastatură."<<endl;
	cout<<endl<<"Optiunea: ";

}


int main()
{

	int opt;
	Lista list;
	list.head=NULL;//se initializeaza capul listei pe null
	Sporturi Baschet(1,"Steaua","Issius",15);

	do
	{
		Meniu();
		cin>>opt;

		switch (opt)
		{
		case 0:
			break;
		case 1://adaugare din fisier
			Adaugare_din_fisier(&list);
			break;
		case 2://adaugare de la tastatura
			cout<<endl;
			Adaugare_manual(&list);
			cout<<endl;
			break;
		case 3://introduce in fisier datele cat le si afiseaza pe ecran
			list.Introduce_fisier();
			break;
		case 4://sterge din lista
			cout<<endl;
			stergere(&list);
			break;
		case 5://schimba nume
			schimbare_nume(&list);
			break;
		case 6://Afiseaza lista ordonata
			list.Afisare_Lista();
			break;
		case 7://Introduce in fisier echipele unui anumit antrenor introdu de la tastatura
			list.Introduce_fisier_Antrenor();
			break;
		default:

			cout<<"Optiunea nu este buna, introduceti alta optiune"<<endl;
			_getch();
			break;
		}

	}while(opt!=0);

}
