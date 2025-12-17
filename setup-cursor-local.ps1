# Script para configurar variáveis de ambiente para Cursor usar LM Studio local
# Execute este script como Administrador para configurar permanentemente

Write-Host "Configurando variáveis de ambiente para Cursor..." -ForegroundColor Green

# Configurar variáveis de ambiente do usuário
[System.Environment]::SetEnvironmentVariable("OPENAI_BASE_URL", "http://localhost:11434/v1", "User")
[System.Environment]::SetEnvironmentVariable("OPENAI_API_KEY", "ollama", "User")
[System.Environment]::SetEnvironmentVariable("OPENAI_MODEL", "gpt-oss:20b", "User")

Write-Host "Variáveis de ambiente configuradas com sucesso!" -ForegroundColor Green
Write-Host ""
Write-Host "Variáveis configuradas:" -ForegroundColor Yellow
Write-Host "  OPENAI_BASE_URL=http://localhost:11434/v1"
Write-Host "  OPENAI_API_KEY=ollama"
Write-Host "  OPENAI_MODEL=gpt-oss:20b"
Write-Host ""
Write-Host "IMPORTANTE: Reinicie o Cursor para que as mudanças tenham efeito!" -ForegroundColor Cyan
Write-Host ""
Write-Host "Para verificar se está funcionando:" -ForegroundColor Yellow
Write-Host "  1. Certifique-se de que o LM Studio está rodando"
Write-Host "  2. Abra o Cursor"
Write-Host "  3. Tente usar o chat do Cursor"

