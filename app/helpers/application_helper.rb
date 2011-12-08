module ApplicationHelper
  def get_video(url)
    begin
      ::UnvlogIt.new(url)
    rescue Exception
      nil
    end
  end
end
