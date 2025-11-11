(function () {
  const ticker = document.getElementById('aiTicker');
  if (!ticker) {
    return;
  }

  const render = (messages) => {
    if (!messages.length) {
      ticker.innerHTML = '<span>Stay tuned for trusted AI and IT awareness updates from Maizura Digital Empowerment Trust...</span>';
      return;
    }
    const text = messages.join(' • ');
    ticker.innerHTML = `<span>${text}</span><span>${text}</span>`;
  };

  const fetchFeeds = async () => {
    ticker.innerHTML = '<span>Loading latest AI, open-source and digital awareness updates...</span>';
    try {
      const feeds = [
        'https://techcrunch.com/feed/',
        'https://www.theverge.com/rss/index.xml'
      ];
      const allItems = [];
      for (const feed of feeds) {
        const response = await fetch(`https://api.rss2json.com/v1/api.json?rss_url=${encodeURIComponent(feed)}`, {
          mode: 'cors',
          credentials: 'omit'
        });
        if (!response.ok) {
          continue;
        }
        const data = await response.json();
        if (!data.items) {
          continue;
        }
        for (const item of data.items.slice(0, 25)) {
          if (item && item.title) {
            allItems.push(String(item.title).replace(/&amp;/g, '&'));
          }
        }
      }
      for (let i = allItems.length - 1; i > 0; i -= 1) {
        const j = Math.floor(Math.random() * (i + 1));
        [allItems[i], allItems[j]] = [allItems[j], allItems[i]];
      }
      render(allItems.slice(0, 50));
    } catch (error) {
      console.warn('Ticker feed failed', error);
      render([]);
    }
  };

  fetchFeeds();
})();
