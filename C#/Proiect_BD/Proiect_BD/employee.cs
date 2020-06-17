using System;
using System.Collections.Generic;
using System.Configuration;
using System.Data;
using System.Data.SqlClient;
using System.IO;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
namespace Proiect_BD
{
    class employee
    {
        public int id;
        public String name, surname, role, department;

        public static String connection = "Data Source=localhost;Initial Catalog=BD; Integrated Security=SSPI;";
        public employee()
        {
            id = 0;
            this.name = "";
            this.surname = "";
            this.role = "";
            this.department = "";
        }
        public void setId(int id)
        {
            this.id = id;
        }
        public void setName(String name)
        {
            this.name = name;
        }
        public void setSurname(String surname)
        {
            this.surname = surname;
        }
        public void setRole(String role)
        {
            this.role = role;
        }
        public void setDepartament(String department)
        {
            this.department = department;
        }
        public void setAll(int id, String name, String surname, String role, String department)
        {
            this.id = id;
            this.name = name;
            this.surname = surname;
            this.role = role;
            this.department = department;
        }

        public DataTable Select()
        {
           
            SqlConnection conn = new SqlConnection(connection);
            DataTable dt = new DataTable();
            try
            {
                
                String sql = " SELECT * FROM Angajati";
                SqlCommand cmd = new SqlCommand(sql, conn);
                SqlDataAdapter adapter = new SqlDataAdapter(cmd);
                conn.Open();
                adapter.Fill(dt);
            }
            catch (Exception ex)
            {

            }
            finally
            {
                conn.Close();
            }
            return dt;

        }
        public bool Insert(employee e)
        {

            bool isSuccess = false;
            SqlConnection conn = new SqlConnection(connection);
            try
            {

                string sql = "INSERT INTO Angajati (Name, Surname, Role, Department) VALUES (@Name, @Surname, @Role, @Department)";
                SqlCommand cmd = new SqlCommand(sql, conn);

                cmd.Parameters.AddWithValue("@Name", e.name);
                cmd.Parameters.AddWithValue("@Surname", e.surname);
                cmd.Parameters.AddWithValue("@Role", e.role);
                cmd.Parameters.AddWithValue("@Department", e.department);

                conn.Open();
                int rows = cmd.ExecuteNonQuery();

                if (rows > 0)
                    isSuccess = true;

                else
                    isSuccess = false;


            }
            catch (Exception ex)
            {

            }
            finally
            {
                conn.Close();

            }
            return isSuccess;
        }
        public bool update_id()
        {
            bool isSuccessful = false;

            SqlConnection conn = new SqlConnection(connection);
            try
            {

                var command = new SqlCommand("ALTER TABLE Angajati AUTO_INCREMENT=1", conn);
                int rows = command.ExecuteNonQuery();


                if (rows > 0)
                    isSuccessful = true;
                else
                    isSuccessful = false;

            }
            catch (Exception ex)
            {


            }
            finally
            {
                conn.Close();
            }

            return isSuccessful;
        }
        public bool Update(employee e)
        {
            bool isSuccess = false;

            SqlConnection conn = new SqlConnection(connection);

            try
            {
                String sql = "UPDATE Angajati SET Name=@Name, Surname=@Surname, Role=@Role, Department=@Department WHERE Id=@ID";

                SqlCommand cmd = new SqlCommand(sql, conn);

                cmd.Parameters.AddWithValue("@Name", e.name);
                cmd.Parameters.AddWithValue("@Surname", e.surname);
                cmd.Parameters.AddWithValue("@Role", e.role);
                cmd.Parameters.AddWithValue("@Department", e.department);
                cmd.Parameters.AddWithValue("@Id", e.id);

                conn.Open();

                int rows = cmd.ExecuteNonQuery();

                if (rows > 0)
                    isSuccess = true;
                else
                    isSuccess = false;
            }
            catch (Exception ex)
            {

            }
            finally
            {

                conn.Close();
            }

            return isSuccess;

        }
        public bool Delete(employee e)
        {

            bool isSuccess = false;

            SqlConnection conn = new SqlConnection(connection);

            try
            {

                string sql = "DELETE FROM Angajati WHERE Id=@ID";

                SqlCommand cmd = new SqlCommand(sql, conn);

                cmd.Parameters.AddWithValue("@ID",e.id);

                conn.Open();

                int rows = cmd.ExecuteNonQuery();

                if (rows > 0)
                    isSuccess = true;
                else
                    isSuccess = false;

            }
            catch (Exception ex)
            {

            }
            finally
            {
                conn.Close();
            }



            return isSuccess;


        }
        public DataTable Search(String text)
        {
            SqlConnection conn = new SqlConnection(connection);
            String query = "SELECT * FROM Angajati WHERE Name LIKE '%" + text + "%' OR Surname LIKE '%" + text + "%'";
            SqlDataAdapter searchFilter = new SqlDataAdapter(query, conn);

            DataTable dataTable = new DataTable();
            searchFilter.Fill(dataTable);
            return dataTable;
        }
        public void export()
        {

            StreamWriter sw = null;
            int ok = 0;
            sw = new StreamWriter("C:\\Users\\edico\\OneDrive\\Desktop\\BD.txt", true);
            String query = "select * from Angajati";
            SqlConnection conn = new SqlConnection(connection);

            SqlCommand oCmd = new SqlCommand(query, conn);

            conn.Open();
            using (SqlDataReader oReader = oCmd.ExecuteReader())
            {
                while (oReader.Read())
                {
                    ok = 1;
                    sw.Write(oReader["Name"].ToString() + "\t" + oReader["Surname"].ToString() + "\t" + oReader["Role"].ToString() + "\t" + oReader["Department"].ToString());
                    sw.WriteLine();
              
                }
                conn.Close();

            }
            sw.Close();
            if (ok == 1)
                MessageBox.Show("Data was succesfully exported","Nice Job",MessageBoxButtons.OK);
            else
                MessageBox.Show("Data crazy. Data exported-NO");

        }

    }
}
