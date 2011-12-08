class HomeController < ApplicationController
  def index
    @titulo = "About"
    @about = Page.about.first
  end
  def services
    @titulo = "Services"
    @services = Page.services
  end
  def portfolio
    @titulo = "Portfolio"
    @galleries = Gallery.all
    @gallery = Gallery.default_gallery
    @video = @gallery.last_video if @gallery
  end
  def portfolio1
    @titulo = "Portfolio"
  end
  def portfolio2
    @titulo = "Portfolio"
    @galleries = Gallery.all
  end
  def portfolio3
    @titulo = "Portfolio"
  end
  def staff
    @titulo = "Staff"
  end
  def blog1
    @titulo = "Blog"
  end
  def contact
    @titulo = "Contact"
    @message = Message.new
  end
end

