namespace Mjoelner
{
    class Application : Gtk.Application
    {
        public Application()
        {
            Object (
                application_id: "com.github.goalpioneers.Mjoelner",
                flags: ApplicationFlags.FLAGS_NONE
            );
        }

        protected override void activate()
        {
            var MainWindow = new Gtk.ApplicationWindow(this)
            {
                default_height = 300,
                default_width = 300,
                title = "Hello, World"
            };

            MainWindow.show_all();
        }


        public static int main( string[] arguments )
        {
            return new Application().run( arguments );
        }   
    }
}