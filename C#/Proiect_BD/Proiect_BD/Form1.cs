using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Data.SqlClient;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace Proiect_BD
{
    public partial class Form1 : Form
    {
        int id;
        public Form1()
        {
            InitializeComponent();
        }
        employee employ = new employee();

        public void clear()
        {
            name.Text="";
            surname.Text="";
            role.Text="";
            department.Text="";
        }


        private void button3_Click(object sender, EventArgs e)
        {
            clear();
        }

        private void addButton_Click(object sender, EventArgs e)
        {
            employ.name = name.Text;
            employ.surname = surname.Text;
            employ.role = role.Text;
            employ.department = department.Text;

            if ((name.Text == "") || (surname.Text == "") || (role.Text == "") || (department.Text == ""))
            {
                MessageBox.Show("Please add data in the textboxes", "Why you like this?", MessageBoxButtons.OK);
            }
            else
            {
                bool success = employ.Insert(employ);

                if (success)
                {
                    MessageBox.Show(name.Text + " was succesfully added to the Database", "Nice", MessageBoxButtons.OK);
                    clear();


                }
                else
                {
                    MessageBox.Show(" Failed  to add new member", "UFF");

                }
                //load data on datagrid view

                employ.update_id();

                DataTable dt = employ.Select();

                dataGrid.DataSource = dt;
            }

        }

        private void updateButton_Click(object sender, EventArgs e)
        {
            employ.id = this.id;
            employ.name = name.Text;
            employ.surname = surname.Text;
            employ.role = role.Text;
            employ.department = department.Text;

          

            bool success = employ.Update(employ);

            if (success)

                MessageBox.Show("Employee updated succesfully","YOU DID IT");

            else

                MessageBox.Show("The employee cannot be updated becouse he crazy","UFFFFFFF");

            DataTable dt = employ.Select();

            dataGrid.DataSource = dt;

          
            clear();


        }


        private void Form1_Load(object sender, EventArgs e)
        {
            employ.update_id();
            DataTable dt = employ.Select();

            dataGrid.DataSource = dt;
        }

        private void dataGrid_RowHeaderMouseClick(object sender, DataGridViewCellMouseEventArgs e)
        {
            int index = e.RowIndex;
            this.id = int.Parse(dataGrid.Rows[index].Cells[0].Value.ToString());
            name.Text = dataGrid.Rows[index].Cells[1].Value.ToString();
            surname.Text = dataGrid.Rows[index].Cells[2].Value.ToString();
            role.Text = dataGrid.Rows[index].Cells[3].Value.ToString();
            department.Text = dataGrid.Rows[index].Cells[4].Value.ToString();
        }

        private void deleteButton_Click(object sender, EventArgs e)
        {
            employ.id = this.id;

            bool success = employ.Delete(employ);

            if (success)
                MessageBox.Show(name.Text +" was succesfully deleted","You DESTROYED him");
            else
                MessageBox.Show("Employee used a magic spell");

            employ.update_id();

            DataTable dt = employ.Select();

            dataGrid.DataSource = dt;

            clear();
        }

        private void searchText_TextChanged(object sender, EventArgs e)
        {
            dataGrid.DataSource = employ.Search(searchText.Text);
        }

        private void exportButton_Click(object sender, EventArgs e)
        {
            employ.export();
        }


    
    }
}
