Mgik_Replace for tt-rss
======================

[Tiny Tiny RSS](http://www.tt-rss.org) plugin to **Fix broken URLs at mosgorizbirkom.ru** in feeds.

The problem is when you subscribe to a feed (http://mosgorizbirkom.ru/web/guest/newdocuments) you see articles, but URLs are broken:<br>
http://mosgorizbirkom.ru/web/guest/http&#x3a;&#x2f;&#x2f;mosgorizbirkom&#x2e;ru&#x2f;web&#x2f;guest&#x2f;news&#x2f;8dbf8663-4342-4b1c-8c2b-ead67d9a46b1<br>
instead of <br>
http://mosgorizbirkom.ru/web/guest/news/8dbf8663-4342-4b1c-8c2b-ead67d9a46b1

You see that the fix is easy, but I suffered for several years.<br>
Bugs are very likely to appear. This is my first try in plugins and there was no documentation.

## Installation

 * Unpack the [zip-File](https://github.com/migdal-or/Mgik_Replace/archive/main.zip)
 * Move the folder "mgik_replace" to your plugins directory
 * Enable "mgik_replace" in TT-RSS's Preferences -> Plugins
 * You should probably rightclick to your feed and select DEBUG - Force refetch && Force rehash, or even delete-subscribe feed

Please report any problems you might encounter directly to [me](http://t.me/raopheefah).

## Legal

>    This program is free software: you can redistribute it and/or modify
>    it under the terms of the GNU General Public License as published by
>    the Free Software Foundation, either version 3 of the License, or
>    (at your option) any later version.
>
>    This program is distributed in the hope that it will be useful,
>    but WITHOUT ANY WARRANTY; without even the implied warranty of
>    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
>    GNU General Public License for more details.
>
>    You should have received a copy of the GNU General Public License
>    along with this program.  If not, see <http://www.gnu.org/licenses/>.
