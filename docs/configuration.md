---
layout: default
title: Configuration
---

# Configuration

Laragram can be configured through the `config/laragram.php` file.

## Basic Configuration

```php
return [
    'bot_token' => env('TELEGRAM_BOT_TOKEN'),
    'webhook_url' => env('TELEGRAM_WEBHOOK_URL'),
    'fsm_table' => 'laragram_fsm',
    'timeout' => 30,
];
```

## Environment Variables

| Variable | Description | Required |
|----------|-------------|----------|
| `TELEGRAM_BOT_TOKEN` | Your bot token from @BotFather | Yes |
| `TELEGRAM_WEBHOOK_URL` | Webhook URL for receiving updates | No |

## Advanced Configuration

### Custom FSM Table

```php
return [
    'fsm_table' => 'custom_fsm_table',
];
```

### Timeout Settings

```php
return [
    'timeout' => 60, // Request timeout in seconds
];
```

### Webhook Configuration

```php
return [
    'webhook_url' => 'https://yourdomain.com/api/bot',
    'webhook_secret' => 'your-secret-key',
];
```

## Security Considerations

1. **Keep your bot token secret**
2. **Use HTTPS for webhooks**
3. **Validate webhook requests**
4. **Implement rate limiting**

## Troubleshooting

### Common Issues

**Bot token not working:**
- Verify token is correct
- Check if bot is active
- Ensure token is in `.env` file

**FSM not working:**
- Run migrations: `php artisan migrate`
- Check database connection
- Verify table exists

**Webhook not receiving updates:**
- Check webhook URL is accessible
- Verify HTTPS is enabled
- Check server logs for errors
