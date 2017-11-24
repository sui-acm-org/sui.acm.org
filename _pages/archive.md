---
layout: archive
title: "Past Symposia"
permalink: "/archive/"
author_profile: false
---

<div class="grid__wrapper">
  {% assign archives = site.archive | reverse %}
  {% for archive in archives %}
    {% include archive-single.html type="grid" %}
  {% endfor %}
</div>
