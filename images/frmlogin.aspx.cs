using System;
using System.Collections;
using System.Configuration;
using System.Data;
using System.Web;
using System.Web.Security;
using System.Web.UI;
using System.Web.UI.HtmlControls;
using System.Web.UI.WebControls;
using System.Web.UI.WebControls.WebParts;

public partial class frmlogin : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        
    }
    protected void btnlogin_Click(object sender, EventArgs e)
    {
        if (txtUsername.Text == "admin" && txtPassword.Text == "rafas@123")
        {
            Session["user"] = "Admin";
            Response.Redirect("DownloadRegistrations.aspx");
        }
        
        else
        {
            Response.Write("<script>alert('Username or password is invalid')</script>");
        }
    }
}
