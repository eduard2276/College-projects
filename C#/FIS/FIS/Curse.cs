using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace FIS
{
    public partial class Curse : Form
    {
       
        private List<Zbor> listaDus, listaIntors;
        private String persoana,clasa;
        private int locuri;
        private float sumaPlata;
        public Curse()
        {
            InitializeComponent();
        }
        public Curse(List<Zbor> listDus, List<Zbor> listIntors, String clasa, String persoana, int locuri)
        {
            InitializeComponent();

            this.persoana = persoana;
            this.listaDus = listDus;
            this.listaIntors = listIntors;
            this.clasa = clasa;
            this.locuri = locuri;
            
            //Introducere in lista plecarilie
            if (clasa == "Business")
            {
                for (int i = 0; i < this.listaDus.Count; i++)
                {
                    this.listaPlecari.Items.Add("Compania: " + this.listaDus[i].getCompanie() + ",  " + this.listaDus[i].getPlecare() + "---->" + this.listaDus[i].getSosire() + ",  Ora: " + this.listaDus[i].getOraPlecare() + ",  Pret: " + this.listaDus[i].getPretBusiness());
                }

                //Introduce in lista intoarcerile
                
                
                    for (int i = 0; i < this.listaIntors.Count; i++)
                    {

                        this.listaIntoarceri.Items.Add("Compania: " + this.listaIntors[i].getCompanie() + ",  " + this.listaIntors[i].getPlecare() + "---->" + this.listaIntors[i].getSosire() + ",  Ora: " + this.listaIntors[i].getOraPlecare() + ",  Pret: " + this.listaIntors[i].getPretBusiness());
                    }
                
            }
            else
            {
                //Introducere in lista plecarilie
                for (int i = 0; i < this.listaDus.Count; i++)
                {
                    this.listaPlecari.Items.Add("Compania: " + this.listaDus[i].getCompanie() + ",  " + this.listaDus[i].getPlecare() + "---->" + this.listaDus[i].getSosire() + ",  Ora: " + this.listaDus[i].getOraPlecare() + ",  Pret: " + this.listaDus[i].getPretEconomic());
                }

                //Introduce in lista intoarcerile
              
                for (int i = 0; i < this.listaIntors.Count; i++)
                {
                    this.listaIntoarceri.Items.Add("Compania: " + this.listaIntors[i].getCompanie() + ",  " + this.listaIntors[i].getPlecare() + "---->" + this.listaIntors[i].getSosire() + ",  Ora: " + this.listaIntors[i].getOraPlecare() + ",  Pret: " + this.listaIntors[i].getPretEconomic());
                }
              
            }


        }
        public Curse(List<Zbor> listDus, String tip, String persoana, int locuri)
        {
            InitializeComponent();
            listaIntoarceri.Hide();
            intoarceriText.Hide();
            infoSupl.Hide();

           
            this.persoana = persoana;
            this.listaDus = listDus;
            this.clasa = tip;
            this.locuri = locuri;
            if (tip == "Business")
            {
                for (int i = 0; i < this.listaDus.Count; i++)
                {
                    this.listaPlecari.Items.Add("Compania: " + this.listaDus[i].getCompanie() + ",  " + this.listaDus[i].getPlecare() + "---->" + this.listaDus[i].getSosire() + ",  Ora: " + this.listaDus[i].getOraPlecare() + ",  Pret: " + this.listaDus[i].getPretBusiness());
                }
            }
            else
            {
                for (int i = 0; i < this.listaDus.Count; i++)
                {
                    this.listaPlecari.Items.Add("Compania: " + this.listaDus[i].getCompanie() + ",  " + this.listaDus[i].getPlecare() + "---->" + this.listaDus[i].getSosire() + ",  Ora: " + this.listaDus[i].getOraPlecare() + ",  Pret: " + this.listaDus[i].getPretEconomic());
                }
            }
        }



        private void go2Rez()
        {
            this.Hide();
            RezervaBilete add = new RezervaBilete(persoana);
            add.FormClosed += (s, args) => this.Close();
            add.Show();
            add.Focus();
        }

        private void Curse_Load(object sender, EventArgs e)
        {

        }

        private void listaPlecari_DoubleClick(object sender, EventArgs e)
        {
           // MessageBox.Show("Ai apasat pe " + listaPlecari.SelectedIndex, "", MessageBoxButtons.OK);
        }

        private void listaPlecari_Click(object sender, EventArgs e)
        {
            int i = listaPlecari.SelectedIndex;
            if(i>=0)
                infoSuplimentare.Text = "Avionul merge de la " + listaDus[i].getPlecare() + " in data de " + listaDus[i].getDataPlecare() + " ora " + listaDus[i].getOraPlecare() + " si ajunge la " + listaDus[i].getSosire() + " in data de " + listaDus[i].getDataSosire() + " la ora " + listaDus[i].getOraSosire();

        }

        private void listaIntoarceri_Click(object sender, EventArgs e)
        {
            
            int j = listaIntoarceri.SelectedIndex;
            if (j >= 0)
                infoSupl.Text = "Avionul merge de la " + listaIntors[j].getPlecare() + " in data de " + listaIntors[j].getDataPlecare() + " ora " + listaIntors[j].getOraPlecare() + " si ajunge la " + listaIntors[j].getSosire() + " in data de " + listaIntors[j].getDataSosire() + " la ora " + listaIntors[j].getOraSosire();
                
            
        }





        private void listaPlecari_SelectedIndexChanged(object sender, EventArgs e)
        {
            
        }

        private void Rezerva_Click(object sender, EventArgs e)
        {
            if(MessageBox.Show("Valoarea totala este de "+this.sumaPlata+". Doriti sa rezervati acest pachet?", "Confirmare",MessageBoxButtons.YesNo, MessageBoxIcon.Question)==DialogResult.Yes)
            {
                int i = listaPlecari.SelectedIndex;
                int j = listaIntoarceri.SelectedIndex;
                if (i >= 0)
                {
                    listaDus[i].rezervaZbor(persoana, clasa, locuri);
                    listaDus[i].updateNrLocuriZbor(this.locuri, this.clasa);
                }
                if (j >= 0)
                {
                    listaIntors[i].rezervaZbor(persoana, clasa, locuri);
                    listaIntors[j].updateNrLocuriZbor(this.locuri, this.clasa);
                }

                if (MessageBox.Show("Rezervare efectuata cu succes. Doriti sa mai efectutati o reervare?", "Felicitari!", MessageBoxButtons.YesNo, MessageBoxIcon.Question) == DialogResult.Yes)
                {
                    go2Rez();
                }
                else
                {
                    this.Close();
                }


            }
            else
            {

            }
          
        }

        public void calculeazaReducere()
        {
            int i = listaPlecari.SelectedIndex;
            int j = listaIntoarceri.SelectedIndex;
            if (i >= 0 && j >= 0)
            {
                this.sumaPlata = this.sumaPlata - this.sumaPlata / 10;
            }
            DateTime inTime = new DateTime(DateTime.Today.Year,DateTime.Today.Month,DateTime.Today.Day);
            DateTime outTime = Convert.ToDateTime(listaDus[i].getDataPlecare());
            if (outTime >= inTime)
            {
                int diferenta = int.Parse(outTime.Subtract(inTime).Days.ToString());
                if(diferenta <=1 )
                    this.sumaPlata =this.sumaPlata - this.sumaPlata / 10;
            }

            //TO DO: TESTEAZA SA VEZI DACA MERGE

        }
        private void calculeazaPret(object sender, EventArgs e)
        {
            this.sumaPlata=0;
            int i = listaPlecari.SelectedIndex;
            int j = listaIntoarceri.SelectedIndex;
            if (listaIntors == null)
            {
                if (i >= 0)
                {
                    if (this.clasa == "Business")
                        sumaPlata = listaDus[i].getPretBusiness();
                    else
                        sumaPlata = listaDus[i].getPretEconomic();
                }
            }
            else
            {
                if (i >= 0 && j >= 0)
                {
                    if (this.clasa == "Business")
                        sumaPlata = listaDus[i].getPretBusiness() + listaIntors[j].getPretBusiness();
                    else
                        sumaPlata = listaDus[i].getPretEconomic() + listaIntors[j].getPretEconomic();
                }
                else
                    if (i >= 0 && j < 0)
                    {
                        if (this.clasa == "Business")
                            sumaPlata = listaDus[i].getPretBusiness();
                        else
                            sumaPlata = listaDus[i].getPretEconomic();
                    }
            }
            calculeazaReducere();
            sumaPlata = sumaPlata * this.locuri;
            total.Text = sumaPlata + " $";

        }

        private void backBtn_Click(object sender, EventArgs e)
        {
            go2Rez();
        }

        private void listaIntoarceri_SelectedIndexChanged(object sender, EventArgs e)
        {

        }









    }
}
